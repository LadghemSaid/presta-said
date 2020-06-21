<?php
/* Smarty version 3.1.33, created on 2020-06-21 20:03:52
  from 'module:commentproductsaidviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eefa1085789d8_40402424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '882bb750c7dc66f753e8316f164f8ec8cad35984' => 
    array (
      0 => 'module:commentproductsaidviewste',
      1 => 1592762591,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eefa1085789d8_40402424 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\wamp65\www\presta/modules/commentproductsaid/views/templates/hook/CommentProduct.tpl --><?php if ($_smarty_tpl->tpl_vars['messageResult']->value == 'true') {?>
    <?php echo '<script'; ?>
 defer>
        window.toast = "Merci pour votre commentaire ! "

    <?php echo '</script'; ?>
>
    <?php } elseif ($_smarty_tpl->tpl_vars['messageResult']->value == "false") {?>
    Quelque chose c'est mal passer :/
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
    <div class="comment-row-container">
        <h2>
            Liste des commentaires
        </h2>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['element']->value) {
?>
            <div class="comment-body">
                <div class="comment-date p-date" data-createdat="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['created_at'], ENT_QUOTES, 'UTF-8');?>
"></div>

                <div class="flex">
                    <div class="comment-author">
                        <a href="mailto:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['email'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['username'], ENT_QUOTES, 'UTF-8');?>
</a>
                    </div>
                    <div class="comment-content">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['element']->value['comment'], ENT_QUOTES, 'UTF-8');?>

                    </div>
                </div>


            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    </div>
<?php } else { ?>
    <div class="comment-row-container">
        <h2>Aucun commentaire</h2>
    </div>
<?php }?>
<div class="comment-form">
    <h2>Poster un commentaire</h2>

    <form action="" method="post">

        <div class="fields">
            <div class="flex">
                <div class="username">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="#999"
                              d="M16.999,4.975L16.999,4.975C16.999,4.975,16.999,4.975,16.999,4.975c-0.419-0.4-0.979-0.654-1.604-0.654H4.606c-0.584,0-1.104,0.236-1.514,0.593C3.076,4.928,3.05,4.925,3.037,4.943C3.034,4.945,3.035,4.95,3.032,4.953C2.574,5.379,2.276,5.975,2.276,6.649v6.702c0,1.285,1.045,2.329,2.33,2.329h10.79c1.285,0,2.328-1.044,2.328-2.329V6.649C17.724,5.989,17.441,5.399,16.999,4.975z M15.396,5.356c0.098,0,0.183,0.035,0.273,0.055l-5.668,4.735L4.382,5.401c0.075-0.014,0.145-0.045,0.224-0.045H15.396z M16.688,13.351c0,0.712-0.581,1.294-1.293,1.294H4.606c-0.714,0-1.294-0.582-1.294-1.294V6.649c0-0.235,0.081-0.445,0.192-0.636l6.162,5.205c0.096,0.081,0.215,0.122,0.334,0.122c0.118,0,0.235-0.041,0.333-0.12l6.189-5.171c0.099,0.181,0.168,0.38,0.168,0.6V13.351z"></path>
                    </svg>
                    <input type="text" class="user-input" name="username" placeholder="Nom d'utilisateur"/>
                </div>
                <div class="password">
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path fill="#999"
                              d="M15.971,7.708l-4.763-4.712c-0.644-0.644-1.769-0.642-2.41-0.002L3.99,7.755C3.98,7.764,3.972,7.773,3.962,7.783C3.511,8.179,3.253,8.74,3.253,9.338v6.07c0,1.146,0.932,2.078,2.078,2.078h9.338c1.146,0,2.078-0.932,2.078-2.078v-6.07c0-0.529-0.205-1.037-0.57-1.421C16.129,7.83,16.058,7.758,15.971,7.708z M15.68,15.408c0,0.559-0.453,1.012-1.011,1.012h-4.318c0.04-0.076,0.096-0.143,0.096-0.232v-3.311c0-0.295-0.239-0.533-0.533-0.533c-0.295,0-0.534,0.238-0.534,0.533v3.311c0,0.09,0.057,0.156,0.096,0.232H5.331c-0.557,0-1.01-0.453-1.01-1.012v-6.07c0-0.305,0.141-0.591,0.386-0.787c0.039-0.03,0.073-0.066,0.1-0.104L9.55,3.75c0.242-0.239,0.665-0.24,0.906,0.002l4.786,4.735c0.024,0.033,0.053,0.063,0.084,0.09c0.228,0.196,0.354,0.466,0.354,0.76V15.408z"></path>
                    </svg>
                    <input type="text" class="pass-input" name="email" placeholder="Email"/>
                </div>
            </div>

            <div class="comment-text">
                <svg class="svg-icon" viewBox="0 0 20 20">
                    <path xmlns="http://www.w3.org/2000/svg"
                          d="M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106    C512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z     M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787    L338.213,256L482,112.212V399.787z"/>
                </svg>
                <textarea required name="comment" class="form-control" id="comment" cols="15" rows="10"
                          placeholder="Votre message..."></textarea>
            </div>
        </div>

        <button type="submit" class="signin-button">Envoyer</button>
        <div class="link">
            Ou <a href="#">se connecter</a>
        </div>
    </form>


</div>
<!-- end D:\wamp65\www\presta/modules/commentproductsaid/views/templates/hook/CommentProduct.tpl --><?php }
}
