<?php

/* {# inline_template_start #}<a href="#{{ title | replace(' ', '-') | lower }}" class="dds-page-nav__link">{{ title }}</a> */
class __TwigTemplate_1b4e618266622e5887a0be1f1b182182a8e958e044f558a6da681ffbba37cbb5 extends Twig_Template
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
        $filters = array("lower" => 1, "replace" => 1);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('lower', 'replace'),
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
        echo "<a href=\"#";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_lower_filter($this->env, twig_replace_filter((isset($context["title"]) ? $context["title"] : null), " ", "-")), "html", null, true));
        echo "\" class=\"dds-page-nav__link\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
        echo "</a>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<a href=\"#{{ title | replace(' ', '-') | lower }}\" class=\"dds-page-nav__link\">{{ title }}</a>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }
}
/* {# inline_template_start #}<a href="#{{ title | replace(' ', '-') | lower }}" class="dds-page-nav__link">{{ title }}</a>*/
