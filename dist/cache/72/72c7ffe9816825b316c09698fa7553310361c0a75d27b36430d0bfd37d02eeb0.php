<?php

/* layout.twig */
class __TwigTemplate_574b3f11be8d26fb566029a681e945310ae22ee60bb49a1227471b1a71e2764d extends Twig_Template
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
    <link href='https://fonts.googleapis.com/css?family=Tinos:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,300italic,600italic,700,700italic' rel='stylesheet'>
    <link rel=\"stylesheet\" href=\"css/generic.css\" />
    <link rel=\"stylesheet\" href=\"css/fonts.css\" />
    <link rel=\"stylesheet\" href=\"css/screen.css\" />
    <link rel=\"stylesheet\" href=\"css/occasies.css\" />
</head>
<body>
    <div class=\"contactslist\">
        ";
        // line 16
        $this->displayBlock('pageContent', $context, $blocks);
        // line 18
        echo "    </div>
    <div class=\"about\" style=\"display: none\">
        </br>Umut Saglam - 2016
    </div>
</body>
</html>";
    }

    // line 16
    public function block_pageContent($context, array $blocks = array())
    {
        // line 17
        echo "        ";
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
        return array (  54 => 17,  51 => 16,  42 => 18,  40 => 16,  25 => 4,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="nl">*/
/* <head>*/
/*     <title>{{ pageTitle }}</title>*/
/*     <meta charset="UTF-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>*/
/*     <link href='https://fonts.googleapis.com/css?family=Tinos:400,700italic,700,400italic' rel='stylesheet' type='text/css'>*/
/*     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,300italic,600italic,700,700italic' rel='stylesheet'>*/
/*     <link rel="stylesheet" href="css/generic.css" />*/
/*     <link rel="stylesheet" href="css/fonts.css" />*/
/*     <link rel="stylesheet" href="css/screen.css" />*/
/*     <link rel="stylesheet" href="css/occasies.css" />*/
/* </head>*/
/* <body>*/
/*     <div class="contactslist">*/
/*         {% block pageContent %}*/
/*         {% endblock %}*/
/*     </div>*/
/*     <div class="about" style="display: none">*/
/*         </br>Umut Saglam - 2016*/
/*     </div>*/
/* </body>*/
/* </html>*/
