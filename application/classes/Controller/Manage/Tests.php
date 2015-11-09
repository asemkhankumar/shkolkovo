<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Manage_Tests extends Controller_Manage_Core {

	public function action_index()
	{
        $ent = ORM::factory('Test_variant')->order_by('id')->find_all();
        $this->set('ent', $ent);
	}

    public function action_quests()
    {
        $id = $this->request->param('id', 0);
        $ent = ORM::factory('Test_variant', $id);
        if ( !$ent->loaded() )
        {
            throw new HTTP_Exception_404;
        }
        $this->set('ent', $ent);

        // $quests = ORM::factory('Test_Quests')->where('test_variant_id', '=', $id)->order_by('number')->find_all();
        $sql = "SELECT DISTINCT test_quests.* 
        FROM test_quests
        WHERE test_quests.test_variant_id=$id 
        AND test_quests.language = \"".$this->language."\"";
	$quests = DB::query(Database::SELECT, $sql)->as_object()->execute();
        $this->set('quests', $quests);
    }

    public function action_questup()
    {
        $id = $this->request->param('id', 0);
        $quest = ORM::factory('Test_Quests', $id);
        if ( !$quest->loaded() )
        {
            throw new HTTP_Exception_404;
        }

        $quest->number = $quest->number - 1;
        $quest->save();
        $this->redirect(URL::media('manage/tests/quests/'.$quest->test_variant_id));
    }

    public function action_questdown()
    {
        $id = $this->request->param('id', 0);
        $quest = ORM::factory('Test_Quests', $id);
        if ( !$quest->loaded() )
        {
            throw new HTTP_Exception_404;
        }

        $quest->number = $quest->number + 1;
        $quest->save();
        $this->redirect(URL::media('manage/tests/quests/'.$quest->test_variant_id));
    }

    public function action_variantup()
    {
        $id = $this->request->param('id', 0);
        $variant = ORM::factory('Test_Questvar', $id);
        if ( !$variant->loaded() )
        {
            throw new HTTP_Exception_404;
        }

        $variant->number = $variant->number - 1;
        $variant->save();
        $this->redirect('manage/tests/variants/'.$variant->quests_id);
    }

    public function action_variantdown()
    {
        $id = $this->request->param('id', 0);
        $variant = ORM::factory('Test_Questvar', $id);
        if ( !$variant->loaded() )
        {
            throw new HTTP_Exception_404;
        }

        $variant->number = $variant->number + 1;
        $variant->save();
        $this->redirect('manage/tests/variants/'.$variant->quests_id);
    }

    public function action_variants()
    {
        $id = $this->request->param('id', 0);
        $quest = ORM::factory('Test_Quests', $id);
        if ( !$quest->loaded() )
        {
            throw new HTTP_Exception_404;
        }
        $this->set('quest', $quest);

        $ent = ORM::factory('Test_Variant', $quest->test_variant_id);
        if ( !$ent->loaded() )
        {
            throw new HTTP_Exception_404;
        }
        $this->set('ent', $ent);

        $variants = ORM::factory('Test_Questvar')->where('quests_id', '=', $id)->order_by('number')->find_all();
        $this->set('variants', $variants);
    }

    public function action_questedit()
    {
        $id = $this->request->param('id', 0);
        $params = explode('-', $id);
        array_walk($params, 'intval');
        $ent_id = $params[0];
        if (isset($params[1]))
        {
            $quest_id = $params[1];
            $quest = ORM::factory('Test_Quests', $quest_id);
        }
        else
        {
            $quest = ORM::factory('Test_Quests');
        }
        $ent = ORM::factory('Test_variant', $ent_id);

        $this->set('quest', $quest);

        if ( !$ent->loaded() )
        {
            throw new HTTP_Exception_404;
        }
        $this->set('ent', $ent);
        $this->set('cancel_url', URL::media('manage/tests/quests/'.$ent_id));

        if ($this->request->method() == 'POST')
        {
            try
            {
                $numbers = ORM::factory('Test_Quests')->where('test_variant_id', '=', $ent_id)->order_by('number', 'DESC')->limit(1)->find();
                $number = $numbers->number + 1;
                $quest->text = Security::xss_clean(Arr::get($_POST, 'text', ''));
                $quest->description = Security::xss_clean(Arr::get($_POST, 'description', ''));
                $quest->test_variant_id = $ent_id;
                $quest->right = (int) Arr::get($_POST, 'right', 0);
                 if ($this->language=='ru')
                {
                     $quest->language = 'ru';


                }
                 if ($this->language=='kz')
                {
                     $quest->language = 'kz';


                }
                 if ($this->language=='en')
                {
                     $quest->language = 'en';


                }
                if (!isset($params[1])) $quest->number = $number;
                $quest->published = 1;
                $quest->save();
                $this->redirect('manage/tests/quests/'.$ent_id);
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors($e->alias());
                $this->set('errors',$errors);
            }
        }
    }

    public function action_variantedit()
    {
        $id = $this->request->param('id', 0);
        $params = explode('-', $id);
        array_walk($params, 'intval');
        $quest_id = $params[0];
        if (isset($params[1]))
        {
            $variant_id = $params[1];
            $variant = ORM::factory('Test_Questvar', $variant_id);
        }
        else
        {
            $variant = ORM::factory('Test_Questvar');
        }
        $quest = ORM::factory('Test_Quests', $quest_id);

        $this->set('variant', $variant);

        if ( !$quest->loaded() )
        {
            throw new HTTP_Exception_404;
        }
        $this->set('quest', $quest);
        $this->set('cancel_url', URL::media('manage/tests/variants/'.$quest_id));

        if ($this->request->method() == 'POST')
        {
            try
            {
                $numbers = ORM::factory('Test_Questvar')->where('quests_id', '=', $quest_id)->order_by('number', 'DESC')->limit(1)->find();
                $number = $numbers->number + 1;
                $variant->text = Security::xss_clean(Arr::get($_POST, 'text', ''));
                $variant->quests_id = $quest_id;
                $variant->number = $number;
                $variant->right = (int) Arr::get($_POST, 'right', 0);
                $variant->published = 1;
                $variant->save();
                $this->redirect('manage/tests/variants/'.$quest_id);
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors($e->alias());
                $this->set('errors',$errors);
            }
        }
    }

  /*  public function action_new()
    {
        $language = Security::xss_clean($this->request->param('id', ''));
        if ($language == '' or !in_array($language, array('ru', 'kz')))
        {
            throw new HTTP_Exception_404;
        }

        $ent = ORM::factory('Ent');
        $ent->language = $language;
        $ent->save();
        Message::success(I18n::get('Variant added. Variant number:').' '.$ent->id);
        $this->redirect('manage/ent/');
    }
   */
    public function action_edit()
    {
        $id = (int) $this->request->param('id', 0);

        if($id){
            $ent = ORM::factory('Test_variant', $id);
            $this->set('ent', $ent);
        }
        else{
        }
        if ($this->request->method() == 'POST')
        {
            $title = Security::xss_clean(Arr::get($_POST, 'title', ''));
            try
            {
                $ent=ORM::factory('Test_variant', $id);
                $ent->title = $title;
                $ent->date=date("Y-m-d H:i:s");
                $ent->save();

                $event = ($id)?'edit':'create';
                $loger = new Loger($event,$ent->title);
                $loger->log($ent);

                $this->redirect('manage/tests/');
            }
            catch (ORM_Validation_Exception $e)
            {
                $errors = $e->errors($e->alias());
                $this->set('errors',$errors);
            }
        }
    }

    public function action_show_ru()
    {
        $id = $this->request->param('id', 0);
        $ent = ORM::factory('Test_variant', $id);
        if ( !$ent->loaded() )
        {
            throw new HTTP_Exception_404;
        }

        $ent->language = $ent->language == 'ru' ? 'kz' : 'ru';
        $ent->save();
        $this->redirect('manage/tests/');
    }

    public function action_show_kz()
    {
        $id = $this->request->param('id', 0);
        $ent = ORM::factory('Test_variant', $id);
        if ( !$ent->loaded() )
        {
            throw new HTTP_Exception_404;
        }

        $ent->language = $ent->language == 'kz' ? 'ru' : 'kz';
        $ent->save();
        $this->redirect('manage/tests/');
    }

    public function action_published()
    {
        $id = $this->request->param('id', 0);
        $ent = ORM::factory('Test_variant', $id);
        if ( !$ent->loaded() )
        {
            throw new HTTP_Exception_404;
        }
        if ( $ent->published )
        {
            $ent->published = 0;
            $ent->save();
            Message::success(I18n::get('Variant hided'));
        }
        else
        {
            $ent->published = 1;
            $ent->save();
            Message::success(I18n::get('Variant unhided'));
        }
        $this->redirect('manage/tests/');
    }

    public function action_delete()
    {
        $id = (int) $this->request->param('id', 0);
        $ent = ORM::factory('Test_variant', $id);
        if (!$ent->loaded())
        {
            throw new HTTP_Exception_404;
        }
        $token = Arr::get($_POST, 'token', false);
        if (($this->request->method() == Request::POST) && Security::token() === $token)
        {
            $ent->delete();
            Message::success(I18n::get('Record deleted'));
            $this->redirect('manage/tests');
        }
        else
        {
            $this->set('record', $ent)->set('token', Security::token(true))->set('cancel_url', Url::media('manage/tests'));
        }
    }

    public function action_questdelete()
    {
        $id = (int) $this->request->param('id', 0);
        $quest = ORM::factory('Test_Quests', $id);
        if ( !$quest->loaded() )
        {
            throw new HTTP_Exception_404;
        }
        $token = Arr::get($_POST, 'token', false);
        if (($this->request->method() == Request::POST) && Security::token() === $token)
        {
            $ent_id = $quest->test_variant_id;
            $quest->delete();
            Message::success(I18n::get('Record deleted'));
            $this->redirect('manage/tests/quests/'.$ent_id);
        }
        else
        {
            $this->set('record', $quest)->set('token', Security::token(true))->set('cancel_url', Url::media('manage/tests/quests/'.$quest->test_variant_id));
        }
    }

    public function action_variantdelete()
    {
        $id = (int) $this->request->param('id', 0);
        $variant = ORM::factory('Test_Questvar', $id);
        if ( !$variant->loaded() )
        {
            throw new HTTP_Exception_404;
        }
        $token = Arr::get($_POST, 'token', false);
        if (($this->request->method() == Request::POST) && Security::token() === $token)
        {
            $quest_id = $variant->quests_id;
            $variant->delete();
            Message::success(I18n::get('Record deleted'));
            $this->redirect('manage/tests/variants/'.$quest_id);
        }
        else
        {
            $this->set('record', $variant)->set('token', Security::token(true))->set('cancel_url', Url::media('manage/tests/variants/'.$variant->quest_id));
        }
    }

    public function action_questpublish()
    {
        $id = $this->request->param('id', 0);
        $quest = ORM::factory('Test_Quests', $id);
        if ( !$quest->loaded() )
        {
            throw new HTTP_Exception_404;
        }
        if ( $quest->published )
        {
            $quest->published = 0;
            $quest->save();
            Message::success(I18n::get('Quest hided'));
        }
        else
        {
            $quest->published = 1;
            $quest->save();
            Message::success(I18n::get('Quest unhided'));
        }
        $this->redirect('manage/tests/quests/'.$quest->test_variant_id);
    }

    public function action_variantpublish()
    {
        $id = $this->request->param('id', 0);
        $variant = ORM::factory('Test_Questvar', $id);
        if ( !$variant->loaded() )
        {
            throw new HTTP_Exception_404;
        }
        if ( $variant->published )
        {
            $variant->published = 0;
            $variant->save();
            Message::success(I18n::get('Variant hided'));
        }
        else
        {
            $variant->published = 1;
            $variant->save();
            Message::success(I18n::get('Variant unhided'));
        }
        $this->redirect('manage/tests/variants/'.$variant->quests_id);
    }


}
