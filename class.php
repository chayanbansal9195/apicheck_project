


<?php
class page_url
{

    var $page_title;

    var $page_url;

    function _constructor()

    {

        $page_title = "";

        $page_url = "";
    }
    public function get_page($value)

    {

        //Home page for All
        define('home_page', '000');
        define('action', 'act');
        define('another', 'ano');
        define('something', 'some');
        define('link', 'lnk');
        define('linkdis', 'lnkdis');
        define('ndlnkdis', '2ndlnkdis');
        define('stunotification', '0NOTCSTU');
        define('table', 'TAB');
        define('tabview', 'TABVIE');

        switch ($value) {
            case home_page:
                $this->page_url = "welcomehome.php";
                $this->page_title = "home";
                break;

            case another:
                $this->page_url = "ano.php";
                break;
            case action:
                $this->page_url = "act.php";
                break;
            case something:
                $this->page_url = "act.php";
                break;
            case link:
                $this->page_url = "lnk.php";
                break;
            case linkdis:
                $this->page_url = "multiDisplay.php";
                break;
            case ndlnkdis:
                $this->page_url = "2ndlnkdis.php";
                break;
            case stunotification:
                $this->page_url = "stunotifiction.php";
                break;
            case table:
                $this->page_url = "table.php";
                break;
                case tabview:
                $this->page_url = "tabview.php";
                break;
        }
    }
}
?>