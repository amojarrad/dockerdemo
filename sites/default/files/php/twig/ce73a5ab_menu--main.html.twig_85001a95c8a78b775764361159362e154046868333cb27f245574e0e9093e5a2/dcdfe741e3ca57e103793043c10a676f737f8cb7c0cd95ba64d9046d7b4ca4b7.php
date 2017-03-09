<?php

/* themes/ss_dds_theme/templates/menu/menu--main.html.twig */
class __TwigTemplate_336c351ec4011a2610749155a53f4380f3d859b78616dacfeb68287a6bfb5a1a extends Twig_Template
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
        $tags = array("import" => 18, "macro" => 26, "if" => 28, "for" => 34, "set" => 37);
        $filters = array();
        $functions = array("link" => 59);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array(),
                array('link')
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

        // line 18
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
    }

    // line 26
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 27
            echo "  ";
            $context["menus"] = $this;
            // line 28
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 29
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 30
                    echo "      <ul class=\"dds-nav\">
    ";
                } else {
                    // line 32
                    echo "      <ul class=\"dds-nav__level\">
    ";
                }
                // line 34
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 35
                    echo "      ";
                    if ($this->getAttribute($context["item"], "is_expanded", array())) {
                        // line 36
                        echo "        ";
                        // line 37
                        $context["item_classes"] = array(0 => "expanded", 1 => "dds-nav__item", 2 => (($this->getAttribute(                        // line 40
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                        // line 43
                        echo "      ";
                    } else {
                        // line 44
                        echo "        ";
                        // line 45
                        $context["item_classes"] = array(0 => "dds-nav__item", 1 => (($this->getAttribute(                        // line 47
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                        // line 49
                        echo "      
      ";
                    }
                    // line 51
                    echo "          
      ";
                    // line 52
                    if ((((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0) && $this->getAttribute($context["item"], "is_expanded", array()))) {
                        // line 53
                        echo "        <li class=\"dds-nav__item\">
          <span class=\"dds-nav__no-link\">";
                        // line 54
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo "</span>            
        </li>
<!--        <a href=\"";
                        // line 56
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\" class=\"dropdown-toggle\" data-target=\"#\" data-toggle=\"dropdown\">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo " <span class=\"caret\"></span></a>-->
      ";
                    } else {
                        // line 58
                        echo "        <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                        echo ">
        ";
                        // line 59
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array()), array("class" => array(0 => "dds-nav__link"))), "html", null, true));
                        echo "
      ";
                    }
                    // line 61
                    echo "          
      ";
                    // line 62
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 63
                        echo "        ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => "nav", 1 => "navbar-nav"), "method"), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
      ";
                    }
                    // line 65
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/ss_dds_theme/templates/menu/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 67,  152 => 65,  146 => 63,  144 => 62,  141 => 61,  136 => 59,  131 => 58,  124 => 56,  119 => 54,  116 => 53,  114 => 52,  111 => 51,  107 => 49,  105 => 47,  104 => 45,  102 => 44,  99 => 43,  97 => 40,  96 => 37,  94 => 36,  91 => 35,  86 => 34,  82 => 32,  78 => 30,  75 => 29,  72 => 28,  69 => 27,  55 => 26,  48 => 24,  45 => 19,  43 => 18,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Default theme implementation to display a menu.*/
/*  **/
/*  * Available variables:*/
/*  * - menu_name: The machine name of the menu.*/
/*  * - items: A nested list of menu items. Each menu item contains:*/
/*  *   - attributes: HTML attributes for the menu item.*/
/*  *   - below: The menu item child items.*/
/*  *   - title: The menu link title.*/
/*  *   - url: The menu link url, instance of \Drupal\Core\Url*/
/*  *   - localized_options: Menu link localized options.*/
/*  **/
/*  * @ingroup templates*/
/*  *//* */
/* #}*/
/* {% import _self as menus %}*/
/* */
/* {#*/
/*   We call a macro which calls itself to render the full tree.*/
/*   @see http://twig.sensiolabs.org/doc/tags/macro.html*/
/* #}*/
/* {{ menus.menu_links(items, attributes, 0) }}*/
/* */
/* {% macro menu_links(items, attributes, menu_level) %}*/
/*   {% import _self as menus %}*/
/*   {% if items %}*/
/*     {% if menu_level == 0 %}*/
/*       <ul class="dds-nav">*/
/*     {% else %}*/
/*       <ul class="dds-nav__level">*/
/*     {% endif %}*/
/*     {% for item in items %}*/
/*       {% if item.is_expanded %}*/
/*         {%*/
/*           set item_classes = [*/
/*             'expanded',*/
/*             'dds-nav__item',*/
/*             item.in_active_trail ? 'active',*/
/*           ]*/
/*         %}*/
/*       {% else %}*/
/*         {%*/
/*           set item_classes = [*/
/*             'dds-nav__item',*/
/*             item.in_active_trail ? 'active',*/
/*           ]*/
/*         %}      */
/*       {% endif %}*/
/*           */
/*       {% if menu_level == 0 and item.is_expanded %}*/
/*         <li class="dds-nav__item">*/
/*           <span class="dds-nav__no-link">{{ item.title }}</span>            */
/*         </li>*/
/* <!--        <a href="{{ item.url }}" class="dropdown-toggle" data-target="#" data-toggle="dropdown">{{ item.title }} <span class="caret"></span></a>-->*/
/*       {% else %}*/
/*         <li{{ item.attributes.addClass(item_classes) }}>*/
/*         {{ link(item.title, item.url, { 'class':['dds-nav__link']}) }}*/
/*       {% endif %}*/
/*           */
/*       {% if item.below %}*/
/*         {{ menus.menu_links(item.below, attributes.removeClass('nav', 'navbar-nav'), menu_level + 1) }}*/
/*       {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* {% endmacro %}*/
/* */
