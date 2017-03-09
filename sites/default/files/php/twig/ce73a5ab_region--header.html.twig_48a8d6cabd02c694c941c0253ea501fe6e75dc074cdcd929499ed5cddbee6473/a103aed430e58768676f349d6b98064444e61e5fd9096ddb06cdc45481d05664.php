<?php

/* themes/ss_dds_theme/templates/system/region--header.html.twig */
class __TwigTemplate_b3fcc058e287665e19574c7117fbcd3e7aa0889e2fe7bb68cc804ea87d0a0927 extends Twig_Template
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
        $tags = array("if" => 20);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
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

        // line 17
        echo "<header class=\"dds-content-header\">
  <div class=\"dds-content-header__container\">
    <div class=\"dds-section__row\">
      ";
        // line 20
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 21
            echo "        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
      ";
        }
        // line 23
        echo "    ";
        // line 24
        echo "  </div>
</header>";
    }

    public function getTemplateName()
    {
        return "themes/ss_dds_theme/templates/system/region--header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 24,  56 => 23,  50 => 21,  48 => 20,  43 => 17,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a region.*/
/*  **/
/*  * Available variables:*/
/*  * - content: The content for this region, typically blocks.*/
/*  * - attributes: HTML attributes for the region div.*/
/*  * - region: The name of the region variable as defined in the theme's*/
/*  *   .info.yml file.*/
/*  **/
/*  * @ingroup templates*/
/*  **/
/*  * @see template_preprocess_region()*/
/*  *//* */
/* #}*/
/* <header class="dds-content-header">*/
/*   <div class="dds-content-header__container">*/
/*     <div class="dds-section__row">*/
/*       {% if content %}*/
/*         {{ content}}*/
/*       {% endif %}*/
/*     {# div closed in block--views-block--dds-page-nav-block-1.html.twig #}*/
/*   </div>*/
/* </header>*/
