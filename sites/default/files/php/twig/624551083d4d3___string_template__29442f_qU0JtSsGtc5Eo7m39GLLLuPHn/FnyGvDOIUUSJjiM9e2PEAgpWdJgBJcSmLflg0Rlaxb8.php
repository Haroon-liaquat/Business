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

/* __string_template__29442fb717211027f67a943063e90a899b09dd35bc4d623461b82344b02b0b4c */
class __TwigTemplate_cd2767710280e834a70d0f761ab45cebf262a9e1c456714b559a0677290d3951 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = ["escape" => 2];
        $functions = ["drupal_url" => 4];

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['drupal_url']
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
        // line 1
        echo "<div class=\"complaint-actions-container\">
<a class=\"actions-toggle\" data-target=\"actions-";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uid"] ?? null)), "html", null, true);
        echo "\">Actions</a>
<ul class=\"actions\" id=\"actions-";
        // line 3
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["uid"] ?? null)), "html", null, true);
        echo "\">
<li><a href=\"";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalUrl((("/admin/user/" . $this->sandbox->ensureToStringAllowed(($context["uid"] ?? null))) . "/account_status_update/32")), "html", null, true);
        echo "\">Approved</a></li>
<li><a href=\"";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalUrl((("/admin/user/" . $this->sandbox->ensureToStringAllowed(($context["uid"] ?? null))) . "/account_status_update/33")), "html", null, true);
        echo "\">Unapproved</a></li>
<li><a href=\"";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalUrl((("/admin/user/" . $this->sandbox->ensureToStringAllowed(($context["uid"] ?? null))) . "/account_status_update/34")), "html", null, true);
        echo "\">On Hold</a></li>
<li><a href=\"";
        // line 7
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalUrl((("/admin/user/" . $this->sandbox->ensureToStringAllowed(($context["uid"] ?? null))) . "/account_status_update/35")), "html", null, true);
        echo "\">Discrepant</a></li>
</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__29442fb717211027f67a943063e90a899b09dd35bc4d623461b82344b02b0b4c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 7,  74 => 6,  70 => 5,  66 => 4,  62 => 3,  58 => 2,  55 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__29442fb717211027f67a943063e90a899b09dd35bc4d623461b82344b02b0b4c", "");
    }
}
