<?php

/* {# inline_template_start #}<div class="wrapper">
Rege - <span>{{ field_rate }}</span><span class="buu">//</span>
Year - <span>{{ field_year }}</span>
</div>
<div class="views body">{{ body }}</div */
class __TwigTemplate_81a6345a92376d7829a9083e4800630c9dbd0bc49db3cbedca8f0fb9444f92a5 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
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

        // line 1
        echo "<div class=\"wrapper\">
Rege - <span>";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_rate"]) ? $context["field_rate"] : null), "html", null, true));
        echo "</span><span class=\"buu\">//</span>
Year - <span>";
        // line 3
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["field_year"]) ? $context["field_year"] : null), "html", null, true));
        echo "</span>
</div>
<div class=\"views body\">";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["body"]) ? $context["body"] : null), "html", null, true));
        echo "</div";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"wrapper\">
Rege - <span>{{ field_rate }}</span><span class=\"buu\">//</span>
Year - <span>{{ field_year }}</span>
</div>
<div class=\"views body\">{{ body }}</div";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  54 => 3,  50 => 2,  47 => 1,);
    }
}
/* {# inline_template_start #}<div class="wrapper">*/
/* Rege - <span>{{ field_rate }}</span><span class="buu">//</span>*/
/* Year - <span>{{ field_year }}</span>*/
/* </div>*/
/* <div class="views body">{{ body }}</div*/
