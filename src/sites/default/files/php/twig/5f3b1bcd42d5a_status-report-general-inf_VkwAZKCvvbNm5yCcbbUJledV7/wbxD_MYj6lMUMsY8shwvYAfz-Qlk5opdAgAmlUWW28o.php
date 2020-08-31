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

/* core/modules/system/templates/status-report-general-info.html.twig */
class __TwigTemplate_6e49b6bf1c22f3f15d85ef8b6d969796d93751f1e0d1802b1d4438d07a8a314c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 37];
        $filters = ["t" => 33, "escape" => 36];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                []
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
        // line 32
        echo "
<h2>";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("General System Information"));
        echo "</h2>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 35
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Drupal Version"));
        echo "</h3>
  ";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["drupal"] ?? null), "value", [])), "html", null, true);
        echo "
  ";
        // line 37
        if ($this->getAttribute(($context["drupal"] ?? null), "description", [])) {
            // line 38
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["drupal"] ?? null), "description", [])), "html", null, true);
            echo "
  ";
        }
        // line 40
        echo "</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Last Cron Run"));
        echo "</h3>
  ";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["cron"] ?? null), "value", [])), "html", null, true);
        echo "
  ";
        // line 44
        if ($this->getAttribute(($context["cron"] ?? null), "run_cron", [])) {
            // line 45
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["cron"] ?? null), "run_cron", [])), "html", null, true);
            echo "
  ";
        }
        // line 47
        echo "  ";
        if ($this->getAttribute(($context["cron"] ?? null), "description", [])) {
            // line 48
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["cron"] ?? null), "description", [])), "html", null, true);
            echo "
  ";
        }
        // line 50
        echo "</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 52
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Web Server"));
        echo "</h3>
  ";
        // line 53
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["webserver"] ?? null), "value", [])), "html", null, true);
        echo "
  ";
        // line 54
        if ($this->getAttribute(($context["webserver"] ?? null), "description", [])) {
            // line 55
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["webserver"] ?? null), "description", [])), "html", null, true);
            echo "
  ";
        }
        // line 57
        echo "</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("PHP"));
        echo "</h3>
  <h4>";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Version"));
        echo "</h4> ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["php"] ?? null), "value", [])), "html", null, true);
        echo "
  ";
        // line 61
        if ($this->getAttribute(($context["php"] ?? null), "description", [])) {
            // line 62
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["php"] ?? null), "description", [])), "html", null, true);
            echo "
  ";
        }
        // line 64
        echo "
  <h4>";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Memory limit"));
        echo "</h4>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["php_memory_limit"] ?? null), "value", [])), "html", null, true);
        echo "
  ";
        // line 66
        if ($this->getAttribute(($context["php_memory_limit"] ?? null), "description", [])) {
            // line 67
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["php_memory_limit"] ?? null), "description", [])), "html", null, true);
            echo "
  ";
        }
        // line 69
        echo "</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Database"));
        echo "</h3>
  <h4>";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Version"));
        echo "</h4>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["database_system_version"] ?? null), "value", [])), "html", null, true);
        echo "
  ";
        // line 73
        if ($this->getAttribute(($context["database_system_version"] ?? null), "description", [])) {
            // line 74
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["database_system_version"] ?? null), "description", [])), "html", null, true);
            echo "
  ";
        }
        // line 76
        echo "
  <h4>";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("System"));
        echo "</h4>";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["database_system"] ?? null), "value", [])), "html", null, true);
        echo "
  ";
        // line 78
        if ($this->getAttribute(($context["database_system"] ?? null), "description", [])) {
            // line 79
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["database_system"] ?? null), "description", [])), "html", null, true);
            echo "
  ";
        }
        // line 81
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/status-report-general-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 81,  200 => 79,  198 => 78,  192 => 77,  189 => 76,  183 => 74,  181 => 73,  175 => 72,  171 => 71,  167 => 69,  161 => 67,  159 => 66,  153 => 65,  150 => 64,  144 => 62,  142 => 61,  136 => 60,  132 => 59,  128 => 57,  122 => 55,  120 => 54,  116 => 53,  112 => 52,  108 => 50,  102 => 48,  99 => 47,  93 => 45,  91 => 44,  87 => 43,  83 => 42,  79 => 40,  73 => 38,  71 => 37,  67 => 36,  63 => 35,  58 => 33,  55 => 32,);
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
 * Default theme implementation for the status report general info.
 *
 * Available variables:
 * - drupal: The status of Drupal installation:
 *   - value: The current status of Drupal installation.
 *   - description: The description for current status of Drupal installation.
 * - cron: The status of cron:
 *   - value: The current status of cron.
 *   - description: The description for current status of cron.
 *   - cron.run_cron: An array to render a button for running cron.
 * - database_system: The status of database system:
 *   - value: The current status of database sytem.
 *   - description: The description for current status of cron.
 * - database_system_version: The info about current database version:
 *   - value: The current version of database.
 *   - description: The description for current version of database.
 * - php: The current version of PHP:
 *   - value: The status of currently installed PHP version.
 *   - description: The description for current installed PHP version.
 * - php_memory_limit: The info about current PHP memory limit:
 *   - value: The status of currently set PHP memory limit.
 *   - description: The description for currently set PHP memory limit.
 * - webserver: The info about currently installed web server:
 *   - value: The status of currently installed web server.
 *   - description: The description for the status of currently installed web
 *     server.
 */
#}

<h2>{{ 'General System Information'|t }}</h2>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">{{ 'Drupal Version'|t }}</h3>
  {{ drupal.value }}
  {% if drupal.description %}
    {{ drupal.description }}
  {% endif %}
</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">{{ 'Last Cron Run'|t }}</h3>
  {{ cron.value }}
  {% if cron.run_cron %}
    {{ cron.run_cron }}
  {% endif %}
  {% if cron.description %}
    {{ cron.description }}
  {% endif %}
</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">{{ 'Web Server'|t }}</h3>
  {{ webserver.value }}
  {% if webserver.description %}
    {{ webserver.description }}
  {% endif %}
</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">{{ 'PHP'|t }}</h3>
  <h4>{{ 'Version'|t }}</h4> {{ php.value }}
  {% if php.description %}
    {{ php.description }}
  {% endif %}

  <h4>{{ 'Memory limit'|t }}</h4>{{ php_memory_limit.value }}
  {% if php_memory_limit.description %}
    {{ php_memory_limit.description }}
  {% endif %}
</div>
<div class=\"system-status-general-info__item\">
  <h3 class=\"system-status-general-info__item-title\">{{ 'Database'|t }}</h3>
  <h4>{{ 'Version'|t }}</h4>{{ database_system_version.value }}
  {% if database_system_version.description %}
    {{ database_system_version.description }}
  {% endif %}

  <h4>{{ 'System'|t }}</h4>{{ database_system.value }}
  {% if database_system.description %}
    {{ database_system.description }}
  {% endif %}
</div>
", "core/modules/system/templates/status-report-general-info.html.twig", "/var/www/html/core/modules/system/templates/status-report-general-info.html.twig");
    }
}
