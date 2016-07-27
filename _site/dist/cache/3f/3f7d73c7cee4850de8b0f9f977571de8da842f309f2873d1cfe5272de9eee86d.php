<?php

/* index.twig */
class __TwigTemplate_f66a6b68e2103fa7756c8ea3e7c280cbf1a5f4ba679597487c0c8b2e158d1513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.twig", "index.twig", 1);
        $this->blocks = array(
            'pageContent' => array($this, 'block_pageContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["pageTitle"] = "Fedict - Webinterface";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_pageContent($context, array $blocks = array())
    {
        // line 6
        echo "    <input id=\"questionButton\" type=\"image\" src=\"./images/question.png\"/>
    <form id=\"searchForm\" action=\".\" method=\"post\">
        <select id=\"searchOption\" name=\"searchOption\" onchange=\"this.form.submit()\">
            ";
        // line 9
        if (((isset($context["searchOption"]) ? $context["searchOption"] : null) == "Catalog")) {
            // line 10
            echo "                <option value=\"Catalog\" selected>Catalog</option>
            ";
        } else {
            // line 12
            echo "                <option value=\"Catalog\">Catalog</option>
            ";
        }
        // line 14
        echo "            ";
        if (((isset($context["searchOption"]) ? $context["searchOption"] : null) == "Dataset")) {
            // line 15
            echo "                <option value=\"Dataset\" selected>Dataset</option>
            ";
        } else {
            // line 17
            echo "                <option value=\"Dataset\">Dataset</option>
            ";
        }
        // line 19
        echo "            ";
        if (((isset($context["searchOption"]) ? $context["searchOption"] : null) == "Distribution")) {
            // line 20
            echo "                <option value=\"Distribution\" selected>Distribution</option>
            ";
        } else {
            // line 22
            echo "                <option value=\"Distribution\">Distribution</option>
            ";
        }
        // line 24
        echo "        </select>
        <input name=\"search\" id=\"search\" class=\"search\" type=\"text\" placeholder=\"Search\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo "\"/>
    </form>

    <script src='http://client.linkeddatafragments.org/scripts/ldf-client-jquery-packaged.js'></script>
    <script>
        function init() {
            key_count_global = 0; // Global variable
            document.getElementById(\"search\").onkeypress = function() {
                key_count_global++;
                setTimeout(\"lookup(\"+key_count_global+\")\", 300);
            }
        }
        \$(document).ready(init);
        function lookup(key_count) {
            if(key_count == key_count_global) { // The control will reach this point 1 second after user stops typing.
                // Do the ajax lookup here.
                \$('form#searchForm').submit();
            }
        }
    </script>

    <div class=\"tbl-header\">
        <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
            <thead>
            <tr>
                <th>Subject</th>
                <th>Predicate</th>
                <th>Object</th>
            </tr>
            </thead>
        </table>
    </div>
    <div  class=\"tbl-content\">
    <table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">
    <tbody>

    <script src='http://client.linkeddatafragments.org/scripts/ldf-client-jquery-packaged.js'></script>
    <script>
        var fragmentsClient = new ldf.FragmentsClient('http://185.14.185.158:5000/triplestore');

        var query = 'SELECT ?s ?p ?o { ?s a <http://www.w3.org/ns/dcat#' + \"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["searchOption"]) ? $context["searchOption"] : null), "html", null, true);
        echo "\" + '> . ' +
                        '?s <http://purl.org/dc/terms/title> ?o . ' +
                        '?s ?p ?o' +
                        ' } ',
                results = new ldf.SparqlIterator(query, { fragmentsClient: fragmentsClient });


        if (\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo "\" == \"\"){
            var query = 'SELECT ?s ?p ?o WHERE {?s  ?p <http://www.w3.org/ns/dcat#' + \"";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["searchOption"]) ? $context["searchOption"] : null), "html", null, true);
        echo "\" + '>. ?s ?p ?o } ',
            results = new ldf.SparqlIterator(query, { fragmentsClient: fragmentsClient });
        }

        var searchOption = \"";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["search"]) ? $context["search"] : null), "html", null, true);
        echo "\";
            results.on('data', function (data ) {
                var subject = \"\";
                var predicate = \"\";
                var object = \"\";
                \$.each(data, function(key, value) {

                    if (key == \"?s\") subject = value;
                    else if (key == \"?p\") predicate = value;
                      else if (key == \"?o\" && (value.toLowerCase().indexOf(searchOption.toLowerCase()) > -1 || searchOption == \"\")  ) {
                        object = value
                        var output =
                                '<tr class=\"tableContent\" data-url=\"'+ subject + '\">' +
                                '<td>'+ subject +'</td>' +
                                '<td>'+ predicate + '</td>' +
                                '<td>'+ object +'</td>' +
                                '</tr>';
                        \$(\"tbody\").append(output);
                    }

                });

                \$('tr.tableContent').click(function() {
                    \$url = \$(this).attr('data-url');
                    window.open('webservice.php?subject='  + \$url, '_self');
                });
        });
    </script>
    </tbody>
    </table>
    </div>


    <ol id=\"joyRideTipContent\">
        <li data-id=\"\" data-button=\"Start\"
            data-options=\"tipLocation:center;tipAnimation:fade\">
            <h2>Welcome!</h2>
            <p>Press Start to begin the guide.</p>
        </li>

        <li data-id=\"searchOption\" data-button=\"Next\"
            data-options=\"tipLocation:top;tipAnimation:fade\">
            <h2>Search categories</h2>
            <p>There are 3 categories:</p>
            <ul>
                <li>Catalog</li>
                <li>Dataset</li>
                <li>Distribution</li>
            </ul>

        </li>

        <li data-id=\"searchOption\" data-button=\"Next\"
            data-options=\"tipLocation:top;tipAnimation:fade\">
            <h2>Catalog</h2>
            <p>Provides data exchange.
                Currently there is only one catalog being used: the services of <a href=\"webservice.php?subject=http://fsb.rovin.be\" target=\"_blank\">http://fsb.rovin.be</a>
            </p>
        </li>

        <li data-id=\"searchOption\" data-button=\"Next\"
            data-options=\"tipLocation:top;tipAnimation:fade\">
            <h2>Dataset</h2>
            <p>Data that is related to services or their families.</p>
            <p>For example: <a href=\"webservice.php?subject=http://fsb.rovin.be/family/S216-eInvoiceServices\" target=\"_blank\">http://fsb.rovin.be/family/S216-eInvoiceServices</a></p>
            <p>This specific dataset consists of 2 distributions:
                <a href=\"webservice.php?subject=http://fsb.rovin.be/service/S218-SupplierService\" target=\"_blank\">S218-SupplierService</a> &
                <a href=\"webservice.php?subject=http://fsb.rovin.be/service/S217-CustomerService\" target=\"_blank\">S217-CustomerService</a>
            </p>
        </li>

        <li data-id=\"searchOption\" data-button=\"Next\"
            data-options=\"tipLocation:top;tipAnimation:fade\">
            <h2>Distribution</h2>
            <p>Data that is related to services or their methods.</p>
        </li>



        <li data-id=\"search\" data-button=\"Next\"
            data-options=\"tipLocation:top;tipAnimation:fade\">
            <h2>Search field</h2>
            <p>Enter your search text here.
                <br>
            It will automatically search for results.</p>

        </li>

        <li data-id=\"\" data-button=\"Thank you for your time\"
            data-options=\"tipLocation:center\">
            <h3>We hope the guide helped you.</h3>
        </li>

    </ol>

    <script>
        \$(window).load(function() {
            \$(\"#joyRideTipContent\").joyride({
                modal: true,
                expose: true
            });
        });
        \$(\"#questionButton\").click(function() {
            \$(\"#joyRideTipContent\").joyride({autoStart: true});
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 77,  131 => 73,  127 => 72,  117 => 65,  74 => 25,  71 => 24,  67 => 22,  63 => 20,  60 => 19,  56 => 17,  52 => 15,  49 => 14,  45 => 12,  41 => 10,  39 => 9,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.twig' %}*/
/* */
/* {% set pageTitle = 'Fedict - Webinterface' %}*/
/* */
/* {% block pageContent %}*/
/*     <input id="questionButton" type="image" src="./images/question.png"/>*/
/*     <form id="searchForm" action="." method="post">*/
/*         <select id="searchOption" name="searchOption" onchange="this.form.submit()">*/
/*             {% if searchOption == 'Catalog' %}*/
/*                 <option value="Catalog" selected>Catalog</option>*/
/*             {% else %}*/
/*                 <option value="Catalog">Catalog</option>*/
/*             {% endif %}*/
/*             {% if searchOption == 'Dataset' %}*/
/*                 <option value="Dataset" selected>Dataset</option>*/
/*             {% else %}*/
/*                 <option value="Dataset">Dataset</option>*/
/*             {% endif %}*/
/*             {% if searchOption == 'Distribution' %}*/
/*                 <option value="Distribution" selected>Distribution</option>*/
/*             {% else %}*/
/*                 <option value="Distribution">Distribution</option>*/
/*             {% endif %}*/
/*         </select>*/
/*         <input name="search" id="search" class="search" type="text" placeholder="Search" value="{{ search }}"/>*/
/*     </form>*/
/* */
/*     <script src='http://client.linkeddatafragments.org/scripts/ldf-client-jquery-packaged.js'></script>*/
/*     <script>*/
/*         function init() {*/
/*             key_count_global = 0; // Global variable*/
/*             document.getElementById("search").onkeypress = function() {*/
/*                 key_count_global++;*/
/*                 setTimeout("lookup("+key_count_global+")", 300);*/
/*             }*/
/*         }*/
/*         $(document).ready(init);*/
/*         function lookup(key_count) {*/
/*             if(key_count == key_count_global) { // The control will reach this point 1 second after user stops typing.*/
/*                 // Do the ajax lookup here.*/
/*                 $('form#searchForm').submit();*/
/*             }*/
/*         }*/
/*     </script>*/
/* */
/*     <div class="tbl-header">*/
/*         <table cellpadding="0" cellspacing="0" border="0">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>Subject</th>*/
/*                 <th>Predicate</th>*/
/*                 <th>Object</th>*/
/*             </tr>*/
/*             </thead>*/
/*         </table>*/
/*     </div>*/
/*     <div  class="tbl-content">*/
/*     <table cellpadding="0" cellspacing="0" border="0">*/
/*     <tbody>*/
/* */
/*     <script src='http://client.linkeddatafragments.org/scripts/ldf-client-jquery-packaged.js'></script>*/
/*     <script>*/
/*         var fragmentsClient = new ldf.FragmentsClient('http://185.14.185.158:5000/triplestore');*/
/* */
/*         var query = 'SELECT ?s ?p ?o { ?s a <http://www.w3.org/ns/dcat#' + "{{ searchOption }}" + '> . ' +*/
/*                         '?s <http://purl.org/dc/terms/title> ?o . ' +*/
/*                         '?s ?p ?o' +*/
/*                         ' } ',*/
/*                 results = new ldf.SparqlIterator(query, { fragmentsClient: fragmentsClient });*/
/* */
/* */
/*         if ("{{ search }}" == ""){*/
/*             var query = 'SELECT ?s ?p ?o WHERE {?s  ?p <http://www.w3.org/ns/dcat#' + "{{ searchOption }}" + '>. ?s ?p ?o } ',*/
/*             results = new ldf.SparqlIterator(query, { fragmentsClient: fragmentsClient });*/
/*         }*/
/* */
/*         var searchOption = "{{ search }}";*/
/*             results.on('data', function (data ) {*/
/*                 var subject = "";*/
/*                 var predicate = "";*/
/*                 var object = "";*/
/*                 $.each(data, function(key, value) {*/
/* */
/*                     if (key == "?s") subject = value;*/
/*                     else if (key == "?p") predicate = value;*/
/*                       else if (key == "?o" && (value.toLowerCase().indexOf(searchOption.toLowerCase()) > -1 || searchOption == "")  ) {*/
/*                         object = value*/
/*                         var output =*/
/*                                 '<tr class="tableContent" data-url="'+ subject + '">' +*/
/*                                 '<td>'+ subject +'</td>' +*/
/*                                 '<td>'+ predicate + '</td>' +*/
/*                                 '<td>'+ object +'</td>' +*/
/*                                 '</tr>';*/
/*                         $("tbody").append(output);*/
/*                     }*/
/* */
/*                 });*/
/* */
/*                 $('tr.tableContent').click(function() {*/
/*                     $url = $(this).attr('data-url');*/
/*                     window.open('webservice.php?subject='  + $url, '_self');*/
/*                 });*/
/*         });*/
/*     </script>*/
/*     </tbody>*/
/*     </table>*/
/*     </div>*/
/* */
/* */
/*     <ol id="joyRideTipContent">*/
/*         <li data-id="" data-button="Start"*/
/*             data-options="tipLocation:center;tipAnimation:fade">*/
/*             <h2>Welcome!</h2>*/
/*             <p>Press Start to begin the guide.</p>*/
/*         </li>*/
/* */
/*         <li data-id="searchOption" data-button="Next"*/
/*             data-options="tipLocation:top;tipAnimation:fade">*/
/*             <h2>Search categories</h2>*/
/*             <p>There are 3 categories:</p>*/
/*             <ul>*/
/*                 <li>Catalog</li>*/
/*                 <li>Dataset</li>*/
/*                 <li>Distribution</li>*/
/*             </ul>*/
/* */
/*         </li>*/
/* */
/*         <li data-id="searchOption" data-button="Next"*/
/*             data-options="tipLocation:top;tipAnimation:fade">*/
/*             <h2>Catalog</h2>*/
/*             <p>Provides data exchange.*/
/*                 Currently there is only one catalog being used: the services of <a href="webservice.php?subject=http://fsb.rovin.be" target="_blank">http://fsb.rovin.be</a>*/
/*             </p>*/
/*         </li>*/
/* */
/*         <li data-id="searchOption" data-button="Next"*/
/*             data-options="tipLocation:top;tipAnimation:fade">*/
/*             <h2>Dataset</h2>*/
/*             <p>Data that is related to services or their families.</p>*/
/*             <p>For example: <a href="webservice.php?subject=http://fsb.rovin.be/family/S216-eInvoiceServices" target="_blank">http://fsb.rovin.be/family/S216-eInvoiceServices</a></p>*/
/*             <p>This specific dataset consists of 2 distributions:*/
/*                 <a href="webservice.php?subject=http://fsb.rovin.be/service/S218-SupplierService" target="_blank">S218-SupplierService</a> &*/
/*                 <a href="webservice.php?subject=http://fsb.rovin.be/service/S217-CustomerService" target="_blank">S217-CustomerService</a>*/
/*             </p>*/
/*         </li>*/
/* */
/*         <li data-id="searchOption" data-button="Next"*/
/*             data-options="tipLocation:top;tipAnimation:fade">*/
/*             <h2>Distribution</h2>*/
/*             <p>Data that is related to services or their methods.</p>*/
/*         </li>*/
/* */
/* */
/* */
/*         <li data-id="search" data-button="Next"*/
/*             data-options="tipLocation:top;tipAnimation:fade">*/
/*             <h2>Search field</h2>*/
/*             <p>Enter your search text here.*/
/*                 <br>*/
/*             It will automatically search for results.</p>*/
/* */
/*         </li>*/
/* */
/*         <li data-id="" data-button="Thank you for your time"*/
/*             data-options="tipLocation:center">*/
/*             <h3>We hope the guide helped you.</h3>*/
/*         </li>*/
/* */
/*     </ol>*/
/* */
/*     <script>*/
/*         $(window).load(function() {*/
/*             $("#joyRideTipContent").joyride({*/
/*                 modal: true,*/
/*                 expose: true*/
/*             });*/
/*         });*/
/*         $("#questionButton").click(function() {*/
/*             $("#joyRideTipContent").joyride({autoStart: true});*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
