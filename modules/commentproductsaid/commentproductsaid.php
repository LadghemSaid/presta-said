<?php

if (!defined('_PS_VERSION_'))
    return false;

require_once(_PS_MODULE_DIR_ . "commentproductsaid/commentProductClass.php");

class CommentProductSaid extends Module implements \PrestaShop\PrestaShop\Core\Module\WidgetInterface
{
    private $templateFile;

    public function __construct()
    {
        $this->name = 'commentproductsaid';
        $this->author = 'Said Ladghem';
        $this->version = '1.0';

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('Product comment', array(), 'Modules.CommentProductSaid.Admin');
        $this->description = $this->trans('Permet au client de laisser un commentaire sous un produit', array(), 'Modules.CommentProductSaid.Admin');
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);

        $this->templateFile = 'module:commentproductsaid/views/templates/hook/CommentProduct.tpl';
    }

    public function renderWidget($hookName, array $configuration)
    {
        $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        return $this->fetch($this->templateFile);
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('displayFooterProduct')
            && $this->registerHook('displayHeader')
            && Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'product_comment` (
                `id_comment` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                `username` varchar(255) NOT NULL,
                `email`varchar(255) NOT NULL,
                `product_id` int(10) NOT NULL,
                `comment` varchar(255) NOT NULL,
                `created_at` DATETIME  NOT NULL,
                `active` BOOLEAN,
                PRIMARY KEY (`id_comment`)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8 ;');

    }

    public function hookdisplayHeader()
    {

        $this->context->controller->addJquery();
        $this->context->controller->registerJavascript ('toastr', 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js',     array('server' => 'remote', 'position' => 'bottom', 'priority' => 150) );
        $this->context->controller->registerJavascript ('moment', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js',     array('server' => 'remote', 'position' => 'bottom', 'priority' => 151) );
        $this->context->controller->registerJavascript ('momentLocalFr', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/locale/fr.min.js',     array('server' => 'remote', 'position' => 'bottom', 'priority' => 152) );
        $this->context->controller->registerJavascript ('modules-commentproductsaid', 'modules/' . $this->name . '/assets/app.js',  [
            'priority' => 200,
            'attribute' => 'defer',
        ]);

        $this->context->controller->registerStylesheet('toastr-css', 'https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css',  array('server' => 'remote', 'position' => 'bottom', 'priority' => 160));
        $this->context->controller->registerStylesheet('modules-commentproductsaid', 'modules/' . $this->name . '/assets/style.css');
    }

    public function getContent()
    {
        $html = "";

        if (Tools::getValue('id_comment')) {
            $resultAction = false;

            $id = Tools::getValue('id_comment');
            $comment = new commentProductClass($id);

            if (Tools::getValue('updatecommentproductsaid')) {

                $comment->active = true;
                if ($comment->save())
                    $resultAction = true;

            }
            if (Tools::isSubmit('deletecommentproductsaid')) {
                if ($comment->delete())
                    $resultAction = true;
            }

            if ($resultAction)
                $html .= "<div class='alert alert-success' >Action executed correctly </div>";
            else
                $html .= "<div class='alert alert-error' >Error happened</div>";

        }
        $data = $this->getAllRecord();
        // create the helper list
        $helper = new HelperList();
        $helper->identifier = "id_comment";
        $helper->shopLinkType = null;
        $helper->actions = array('edit', 'delete');
        $helper->title = $this->displayName;
        $helper->table = $this->name;

        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;

        $html .= $helper->generateList($data, array(
            'id_comment' => array(
                'title' => "ID",
                'width' => 80,
                'search' => false,
                'orderby' => false
            ),
            'comment' => array(
                'title' => "Liste des commentaires"
            )
        ));
        return $html;


    }


    public function uninstall()
    {
        if (
            parent::uninstall()
            && Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'product_comment`')) {

            return true;
        }
        return false;


    }

    public function getWidgetVariables($hookName, array $configuration)
    {

        // handle form submission
        $message = "";
        $comments = null;

        if (Tools::isSubmit('comment')) {
            $commentProduct = new commentProductClass();
            $commentProduct->comment = Tools::getValue('comment');
            $commentProduct->product_id = Tools::getValue('id_product');
            $commentProduct->username =Tools::getValue('username');
            $commentProduct->email = Tools::getValue('email');
            $commentProduct->created_at = date("Y-m-d H:i:s");
            $commentProduct->active = true;

            if ($commentProduct->save())
                $message = true;
            else {
                $message = false;
            }
        }
        // Get the previous comments


        $sql = new DbQuery();
        $sql->select('*');
        $sql->from('product_comment', 'pc');
        //$sql->innerJoin('customer', 'c', 'pc.username = c.id_customer');
        $sql->where(' pc.active = 1 && pc.product_id = ' . (int)Tools::getValue('id_product'));
        $sql->orderBy('pc.created_at desc');

        return array(
            'messageResult' => $message,
            'comments' => DB::getInstance()->executeS($sql)
        );
    }

    protected function getAllRecord()
    {
        $sql = new DbQuery();
        $sql->select('*');
        $sql->from('product_comment', 'pc');
       // $sql->innerJoin('customer', 'c', 'pc.username = c.id_customer');
        return DB::getInstance()->executeS($sql);
    }

}
