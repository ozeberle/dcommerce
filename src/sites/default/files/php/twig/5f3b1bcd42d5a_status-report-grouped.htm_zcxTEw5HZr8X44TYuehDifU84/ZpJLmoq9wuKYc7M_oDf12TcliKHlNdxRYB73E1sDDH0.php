<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/modules/system/templates/status-report-grouped.html.twig */
class __TwigTemplate_fafb147b8b75c8e24e8542fc86cd2ac69089bfa764eca9999f9f387d263f8fdd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 22, "set" => 28, "if" => 34];
        $filters = ["escape" => 19];
        $functions = ["attach_library" => 19, "create_attribute" => 33];

        try {
            $this->sandbox->checkSecurity(
                ['for', 'set', 'if'],
                ['escape'],
                ['attach_library', 'create_attribute']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("core/drupal.collapse"), "html", null, true);
        echo "

<div>
  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grouped_requirements"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 23
            echo "    <div>
      <h3 id=\"";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["group"], "type", [])), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["group"], "title", [])), "html", null, true);
            echo "</h3>
      ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", []));
            foreach ($context['_seq'] as $context["_key"] => $context["requirement"]) {
                // line 26
                echo "        <details class=\"system-status-report__entry\" open>
          ";
                // line 28
                $context["summary_classes"] = [0 => "system-status-report__status-title", 1 => ((twig_in_filter($this->getAttribute(                // line 30
$context["group"], "type", []), [0 => "warning", 1 => "error"])) ? (("system-status-report__status-icon system-status-report__status-icon--" . $this->sandbox->ensureToStringAllowed($this->getAttribute($context["group"], "type", [])))) : (""))];
                // line 33
                echo "          <summary";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute(["class" => ($context["summary_classes"] ?? null)]), "html", null, true);
                echo " role=\"button\">
            ";
                // line 34
                if ($this->getAttribute($context["requirement"], "severity_title", [])) {
                    // line 35
                    echo "              <span class=\"visually-hidden\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["requirement"], "severity_title", [])), "html", null, true);
                    echo "</span>
            ";
                }
                // line 37
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["requirement"], "title", [])), "html", null, true);
                echo "
          </summary>
          <div class=\"system-status-report__entry__value\">
            ";
                // line 40
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["requirement"], "value", [])), "html", null, true);
                echo "
            ";
                // line 41
                if ($this->getAttribute($context["requirement"], "description", [])) {
                    // line 42
                    echo "              <div class=\"description\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["requirement"], "description", [])), "html", null, true);
                    echo "</div>
            ";
                }
                // line 44
                echo "          </div>
        </details>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requirement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-report-grouped.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  124 => 47,  116 => 44,  110 => 42,  108 => 41,  104 => 40,  97 => 37,  91 => 35,  89 => 34,  84 => 33,  82 => 30,  81 => 28,  78 => 26,  74 => 25,  68 => 24,  65 => 23,  61 => 22,  55 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation of grouped status report requirements.
 *
 * - grouped_requirements: Contains grouped requirements.
 *   Each group contains:
 *   - title: The title of the group.
 *   - type: The severity of the group.
 *   - items: The requirement instances.
 *     Each requirement item contains:
 *     - title: The title of the requirement.
 *     - value: (optional) The requirement's status.
 *     - description: (optional) The requirement's description.
 *     - severity_title: The title of the severity.
 *     - severity_status: Indicates the severity status.
 */
#}
{{ attach_library('core/drupal.collapse') }}

<div>
  {% for group in grouped_requirements %}
    <div>
      <h3 id=\"{{ group.type }}\">{{ group.title }}</h3>
      {% for requirement in group.items %}
        <details class=\"system-status-report__entry\" open>
          {%
            set summary_classes = [
              'system-status-report__status-title',
              group.type in ['warning', 'error'] ? 'system-status-report__status-icon system-status-report__status-icon--' ~ group.type
            ]
          %}
          <summary{{ create_attribute({'class': summary_classes}) }} role=\"button\">
            {% if requirement.severity_title  %}
              <span class=\"visually-hidden\">{{ requirement.severity_title }}</span>
            {% endif %}
            {{ requirement.title }}
          </summary>
          <div class=\"system-status-report__entry__value\">
            {{ requirement.value }}
            {% if requirement.description %}
              <div class=\"description\">{{ requirement.description }}</div>
            {% endif %}
          </div>
        </details>
      {% endfor %}
    </div>
  {% endfor %}
</div>
", "core/modules/system/templates/status-report-grouped.html.twig", "/var/www/html/core/modules/system/templates/status-report-grouped.html.twig");
    }
}
