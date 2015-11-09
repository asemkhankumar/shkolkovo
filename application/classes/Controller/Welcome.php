<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Core
{

    public function action_index()
    {
        $books = ORM::factory('book');
        $slogans = ORM::factory('slogan');
//        $post = $this->request->post('test');
//        $sql = " SELECT * FROM books ";
        if ($_POST){
            if (($_POST['language']))
                $books = $books->and_where('language','=', $_POST['language']);

            if (($_POST['subject']))
                $books = $books->and_where('subject','=', $_POST['subject']);

            if (($_POST['class']))
                $books = $books->and_where('class','=', $_POST['class']);

            if (($_POST['publisher']))
                $books = $books->and_where('publisher','=', $_POST['publisher']);
        }


        $books = $books->find_all();
        $slogans = $slogans->find_all();
        $this->set('books', $books);
        $this->set('slogans', $slogans);
//        $this->set('books', $item);

        $id = (int) $this->request->param('id', 0);
        $user = $this->user;
        $this->set('user', $user);



    }

    /*
     * Смена версий просмотра обычный - слабовидящие
    */


    public function action_version()
    {
        if (isset($_COOKIE['version_site']))
        {
            setcookie('version_site', 0, time() - 3600,'/');
        }
        else
        {
            setcookie('version_site', 1, time() + 63244800,'/');
        }
        $this->redirect('/');
        //
    }

    /*
     * Меню второгог уровня для слабовидящих
     */
    public function action_menu()
    {

    }
	
	public function action_test()
{
 echo Debug::vars(gd_info());
}
} // End Welcome
