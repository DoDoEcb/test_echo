<!-- END HEADER --><script src="../js/page-loader.min.js"></script>
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#result").load("minerar.php");
        var atualizar = setInterval(function() {
            $("#result").load('minerar.php?cache='+ Math.random());
        }, 10000);
    });

</script>
<!-- HEADER -->
<header id="header">
    <!-- Mobile Button -->
    <button id="mobileMenuBtn"></button>
    <!-- Logo -->
    <span class="logo pull-left">
					<img src="https://dnacoins.com/oie_transparent3.png" alt="Backoffice" height="35" />
				</span>
    <form method="get" action="page-search.html" class="search pull-left hidden-xs">
        <div id="google_translate_element"></div><script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL, multilanguagePage: true}, 'google_translate_element');
            }
        </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    </form>
    <nav>
        <!-- OPTIONS LIST -->
        <ul class="nav pull-right">

            <!-- USER OPTIONS -->
            <li class="dropdown pull-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <img class="user-avatar" alt="" src="https://dnacoins.com/dashboard/user.png" height="34" />
                    <span class="user-name">
                        <span class="hidden-xs">
                            <?php print $row->username ?> <i class="fa fa-angle-down"></i>
                        </span>
                    </span>
                </a>
                <ul class="dropdown-menu hold-on-click">
                    <li><!-- logout -->
                        <a href="logout"><i class="fa fa-power-off"></i> Sair</a>
                    </li>
                </ul>
            </li>
            <!-- /USER OPTIONS -->

        </ul>
        <!-- /OPTIONS LIST -->
    </nav>

</header>
<!-- /HEADER -->