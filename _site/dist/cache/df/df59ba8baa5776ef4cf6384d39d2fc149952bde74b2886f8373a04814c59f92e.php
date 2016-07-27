<?php

/* layout.twig */
class __TwigTemplate_a0a47e0e895193d7dca5b28d1119b45457b81b1dbd3b492708b4a05f1b8d64f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"nl\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : null), "html", null, true);
        echo "</title>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
    <link rel=\"stylesheet\" href=\"./css/normalize.css\" />
    <link rel=\"stylesheet\" href=\"./css/joyride-2.1.css\">
    <link rel=\"stylesheet\" href=\"./css/style.css\" />
    <link rel=\"shortcut icon\" href=\"favicon.ico\" type=\"image/x-icon\">


</head>
<body>
    <div class=\"nav\">
        <ul>
            <li>
                <a href=\".\"><img src=\"./images/logo.png\" alt=\"Fedict-Webinterface logo\"><h1>Fedict-webinterface</h1></a>
            </li>
        </ul>
    </div>
        <div class=\"pagecontent\">
            ";
        // line 23
        $this->displayBlock('pageContent', $context, $blocks);
        // line 25
        echo "        </div>
        <div class=\"footer\">
            </br>Copyright (c) 2016 <a href=\"http://www.openknowledge.be/\" target=\"_blank\">Open Knowledge Belgium</a>
            - <a href=\"http://www.fedict.belgium.be/en\" target=\"_blank\">Fedict</a>
            - <a href=\"https://github.com/osoc16/webinterface-fedict\" target=\"_blank\">GitHub repo</a>
        </div>
    <script src=\"https://code.jquery.com/jquery-2.2.4.min.js\" integrity=\"sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=\" crossorigin=\"anonymous\"></script>
    <script src=\"./scripts/js/jquery.joyride-2.1.js\"></script>
</body>
</html>";
    }

    // line 23
    public function block_pageContent($context, array $blocks = array())
    {
        // line 24
        echo "            ";
    }

    public function getTemplateName()
    {
        return "layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 24,  62 => 23,  49 => 25,  47 => 23,  25 => 4,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="nl">*/
/* <head>*/
/*     <title>{{ pageTitle }}</title>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     <link rel="stylesheet" href="./css/normalize.css" />*/
/*     <link rel="stylesheet" href="./css/joyride-2.1.css">*/
/*     <link rel="stylesheet" href="./css/style.css" />*/
/*     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">*/
/* */
/* */
/* </head>*/
/* <body>*/
/*     <div class="nav">*/
/*         <ul>*/
/*             <li>*/
/*                 <a href="."><img src="./images/logo.png" alt="Fedict-Webinterface logo"><h1>Fedict-webinterface</h1></a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/*         <div class="pagecontent">*/
/*             {% block pageContent %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <div class="footer">*/
/*             </br>Copyright (c) 2016 <a href="http://www.openknowledge.be/" target="_blank">Open Knowledge Belgium</a>*/
/*             - <a href="http://www.fedict.belgium.be/en" target="_blank">Fedict</a>*/
/*             - <a href="https://github.com/osoc16/webinterface-fedict" target="_blank">GitHub repo</a>*/
/*         </div>*/
/*     <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>*/
/*     <script src="./scripts/js/jquery.joyride-2.1.js"></script>*/
/* </body>*/
/* </html>*/
