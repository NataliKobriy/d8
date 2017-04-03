<?php

/* themes/d8/templates/page--front.html.twig */
class __TwigTemplate_0a3c484aa6566848f71dbe725bebbc68173b68738121cf059930ca34b3202afc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 64);
        $filters = array("t" => 57);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 53
        echo "<h1>Hommmmmmme</h1>

<div id=\"page-wrapper\">
  <div id=\"page\">
    <header id=\"header\" class=\"header\" role=\"banner\" aria-label=\"";
        // line 57
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Site header")));
        echo "\">
      <div class=\"section layout-container clearfix\">
        ";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
        echo "
        ";
        // line 60
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
        ";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
      </div>
    </header>
    ";
        // line 64
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 65
            echo "      <div class=\"highlighted\">
        <aside class=\"layout-container section clearfix\" role=\"complementary\">
          ";
            // line 67
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 71
        echo "    ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array())) {
            // line 72
            echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section layout-container clearfix\" role=\"complementary\">
          ";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_top", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 78
        echo "    <div id=\"main-wrapper\" class=\"layout-main-wrapper layout-container clearfix\">
      <div id=\"main\" class=\"layout-main clearfix\">
        ";
        // line 80
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "
        <main id=\"content\" class=\"column main-content\" role=\"main\">
          <section class=\"section\">
            <a id=\"main-content\" tabindex=\"-1\"></a>
            ";
        // line 84
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
          </section>
        </main>
        ";
        // line 87
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 88
            echo "          <div id=\"sidebar-first\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 90
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
            </aside>
          </div>
        ";
        }
        // line 94
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 95
            echo "          <div id=\"sidebar-second\" class=\"column sidebar\">
            <aside class=\"section\" role=\"complementary\">
              ";
            // line 97
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
            </aside>
          </div>
        ";
        }
        // line 101
        echo "      </div>
    </div>
    ";
        // line 103
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_third", array()))) {
            // line 104
            echo "      <div class=\"featured-bottom\">
        <aside class=\"layout-container clearfix\" role=\"complementary\">
          ";
            // line 106
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_first", array()), "html", null, true));
            echo "
          ";
            // line 107
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_second", array()), "html", null, true));
            echo "
          ";
            // line 108
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured_bottom_third", array()), "html", null, true));
            echo "
        </aside>
      </div>
    ";
        }
        // line 112
        echo "    <footer class=\"site-footer\">
      <div class=\"layout-container\">
        ";
        // line 114
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 115
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 116
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
            ";
            // line 117
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "
            ";
            // line 118
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
            echo "
            ";
            // line 119
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 122
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array())) {
            // line 123
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 124
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 127
        echo "      </div>
    </footer>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/d8/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 127,  197 => 124,  194 => 123,  191 => 122,  185 => 119,  181 => 118,  177 => 117,  173 => 116,  170 => 115,  168 => 114,  164 => 112,  157 => 108,  153 => 107,  149 => 106,  145 => 104,  143 => 103,  139 => 101,  132 => 97,  128 => 95,  125 => 94,  118 => 90,  114 => 88,  112 => 87,  106 => 84,  99 => 80,  95 => 78,  88 => 74,  84 => 72,  81 => 71,  74 => 67,  70 => 65,  68 => 64,  62 => 61,  58 => 60,  54 => 59,  49 => 57,  43 => 53,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Bartik's theme implementation to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template normally located in the*/
/*  * core/modules/system directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.highlighted: Items for the highlighted region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.featured_top: Items for the featured top region.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.featured_bottom_first: Items for the first featured bottom region.*/
/*  * - page.featured_bottom_second: Items for the second featured bottom region.*/
/*  * - page.featured_bottom_third: Items for the third featured bottom region.*/
/*  * - page.footer_first: Items for the first footer column.*/
/*  * - page.footer_second: Items for the second footer column.*/
/*  * - page.footer_third: Items for the third footer column.*/
/*  * - page.footer_fourth: Items for the fourth footer column.*/
/*  * - page.footer_fifth: Items for the fifth footer column.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* <h1>Hommmmmmme</h1>*/
/* */
/* <div id="page-wrapper">*/
/*   <div id="page">*/
/*     <header id="header" class="header" role="banner" aria-label="{{ 'Site header'|t }}">*/
/*       <div class="section layout-container clearfix">*/
/*         {{ page.secondary_menu }}*/
/*         {{ page.header }}*/
/*         {{ page.primary_menu }}*/
/*       </div>*/
/*     </header>*/
/*     {% if page.highlighted %}*/
/*       <div class="highlighted">*/
/*         <aside class="layout-container section clearfix" role="complementary">*/
/*           {{ page.highlighted }}*/
/*         </aside>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if page.featured_top %}*/
/*       <div class="featured-top">*/
/*         <aside class="featured-top__inner section layout-container clearfix" role="complementary">*/
/*           {{ page.featured_top }}*/
/*         </aside>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div id="main-wrapper" class="layout-main-wrapper layout-container clearfix">*/
/*       <div id="main" class="layout-main clearfix">*/
/*         {{ page.breadcrumb }}*/
/*         <main id="content" class="column main-content" role="main">*/
/*           <section class="section">*/
/*             <a id="main-content" tabindex="-1"></a>*/
/*             {{ page.content }}*/
/*           </section>*/
/*         </main>*/
/*         {% if page.sidebar_first %}*/
/*           <div id="sidebar-first" class="column sidebar">*/
/*             <aside class="section" role="complementary">*/
/*               {{ page.sidebar_first }}*/
/*             </aside>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if page.sidebar_second %}*/
/*           <div id="sidebar-second" class="column sidebar">*/
/*             <aside class="section" role="complementary">*/
/*               {{ page.sidebar_second }}*/
/*             </aside>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*     {% if page.featured_bottom_first or page.featured_bottom_second or page.featured_bottom_third %}*/
/*       <div class="featured-bottom">*/
/*         <aside class="layout-container clearfix" role="complementary">*/
/*           {{ page.featured_bottom_first }}*/
/*           {{ page.featured_bottom_second }}*/
/*           {{ page.featured_bottom_third }}*/
/*         </aside>*/
/*       </div>*/
/*     {% endif %}*/
/*     <footer class="site-footer">*/
/*       <div class="layout-container">*/
/*         {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}*/
/*           <div class="site-footer__top clearfix">*/
/*             {{ page.footer_first }}*/
/*             {{ page.footer_second }}*/
/*             {{ page.footer_third }}*/
/*             {{ page.footer_fourth }}*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if page.footer_fifth %}*/
/*           <div class="site-footer__bottom">*/
/*             {{ page.footer_fifth }}*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </footer>*/
/*   </div>*/
/* </div>*/
/* */
