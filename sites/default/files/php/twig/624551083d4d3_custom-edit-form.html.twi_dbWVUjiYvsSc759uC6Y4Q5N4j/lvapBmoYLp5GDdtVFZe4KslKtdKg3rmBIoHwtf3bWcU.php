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

/* modules/custom/user_edit/templates/custom-edit-form.html.twig */
class __TwigTemplate_51c40480ad35ca87f90af58e064ff627ca4fb34af69b2cb201eb005332e525a2 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["macro" => 602, "for" => 605];
        $filters = ["escape" => 71, "without" => 599, "keys" => 605];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['macro', 'for'],
                ['escape', 'without', 'keys'],
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
        // line 22
        echo "
";
        // line 33
        echo "

<!-- Step 1 -->
<div class=\"custom-register registration-from register-step-container\">

\t<div class=\"container\">
\t\t<div class=\"row\">

\t\t\t


\t\t\t<!-- Step 2 -->


\t\t\t<div
\t\t\t\tclass=\"container step-two-regis\"><!-- featured-imagebox end-->

\t\t\t</div>

\t\t\t

\t\t\t<!-- Step 3-->
\t\t\t<div class=\"register-step\">
\t\t\t\t<h1 style=\"font-size: 30px; margin-left: 6%;\">Products to make your life easier</h1>
\t\t\t\t<p style=\"margin-left: 6%;\">Please select the products you would like to purchase</p>

\t\t\t\t<div class=\"container ml-5 container-cus-width\" style=\"margin-top: 70px;\">
\t\t\t\t\t<div class=\"row\" style=\"margin-top: 30px;\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"card card-default\" style=\"width: 20em; border-radius: 1em;\">
\t\t\t\t\t\t\t\t<div class=\"card-body card-7-5\">

\t\t\t\t\t\t\t\t\t<div class=\"card-right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Online Payment Gateway</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/icon.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class='product-wrapper'>
\t\t\t\t\t\t\t\t\t\t<div class='product-selection'>
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array"), "#icon", [], "array")), "html", null, true);
        echo "' style=\"boder-radius: 1em;\"/>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn rounded-pill select-product\" style=\"width: 80%; border: 1px solid #393939;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                       box-sizing: border-box; border-radius: 100px; margin-top: 8%; margin-left: 10%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSelect this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/arrow.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class='p-1 product-form'>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"card card-default\" style=\"width: 20em; border-radius: 1em;\">
\t\t\t\t\t\t\t\t<div class=\"card-body card-7-5\">

\t\t\t\t\t\t\t\t\t<div class=\"card-right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Payroll</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 117
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/icon.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class='product-wrapper'>

\t\t\t\t\t\t\t\t\t\t<div class='product-selection'>
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 124
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array"), "#icon", [], "array")), "html", null, true);
        echo "' style=\"border-radius: 1em;\"/>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn rounded-pill select-product\" style=\"width: 80%; border: 1px solid #393939;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                       box-sizing: border-box; border-radius: 100px; margin-top: 8%; margin-left: 10%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSelect this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 134
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/arrow.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class='p-1 product-form'>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 146
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"container ml-5 container-cus-width\" style=\"margin-top: 70px;\">
\t\t\t\t\t<div class=\"row\" style=\"margin-top: 30px;\">
\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"card card-default\" style=\"width: 20em; border-radius: 1em;\">
\t\t\t\t\t\t\t\t<div class=\"card-body card-7-5\">

\t\t\t\t\t\t\t\t\t<div class=\"card-right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>QR Payments</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 171
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/icon.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class='product-wrapper'>
\t\t\t\t\t\t\t\t\t\t<div class='product-selection'>
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 177
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array"), "#icon", [], "array")), "html", null, true);
        echo "' style=\"boder-radius: 1em;\"/>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn rounded-pill select-product\" style=\"width: 80%; border: 1px solid #393939;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                       box-sizing: border-box; border-radius: 100px; margin-top: 8%; margin-left: 10%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSelect this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 187
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/arrow.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class='p-1 product-form'>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 198
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t<div class=\"card card-default\" style=\"width: 20em; border-radius: 1em;\">
\t\t\t\t\t\t\t\t<div class=\"card-body card-7-5\">

\t\t\t\t\t\t\t\t\t<div class=\"card-right\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5>Corporate Collections</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 217
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/icon.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class='product-wrapper'>

\t\t\t\t\t\t\t\t\t\t<div class='product-selection'>
\t\t\t\t\t\t\t\t\t\t\t<img src='";
        // line 224
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array"), "#icon", [], "array")), "html", null, true);
        echo "' style=\"border-radius: 1em;\"/>
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn rounded-pill select-product\" style=\"width: 80%; border: 1px solid #393939;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                                       box-sizing: border-box; border-radius: 100px; margin-top: 8%; margin-left: 10%;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-8\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSelect this
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 234
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/arrow.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>


\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class='p-1 product-form'>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 246
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_online_payment_gateway", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t</div>


\t\t\t<!-- Step 4-->

\t\t\t<div class=\"register-step\">
\t\t\t\t<h1 class=\"ml-2\" style=\"font-size: 30px;\">Select the Type of your Company</h1>
\t\t\t\t<p class=\"ml-2\">Click on the card to select your company type</p>

\t\t\t\t<div class=\"container\" style=\"margin-top: 70px;\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<div class=\"card\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t\t<label class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 276
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/company.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-3\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 281
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"company-type-checkbox\" data-value=\"58\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t\t\t<h4>Partnerships</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">The partners in a partnership may be individuals, businesses,interest-based organizations, schools, or governments.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<div class=\"card h-100\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t\t<label class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 299
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/company.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-3\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 304
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"company-type-checkbox\" data-value=\"59\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t\t\t<h4>Sole Properitor</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Enterprise owned and run by one person and in which there is no legal distinction between the owner</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t<div class=\"card h-100\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t\t<label class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 321
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/company.png\" alt=\"image\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"col-3\" style=\"margin-top: 10px;\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 326
        echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"company-type-checkbox\" data-value=\"60\"></span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"row mt-3\">
\t\t\t\t\t\t\t\t\t\t<h4>Private & Public Limited Companies</h4>
\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">Interest-based organizations, schools, or governments.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t</div>


\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"informations\">
\t\t\t\t\t\t<h1>Enter Details of your Company</h1>
\t\t\t\t\t\t<div class='company-detail'>
\t\t\t\t\t\t\t<ul class='company-detail-sidebar'>
\t\t\t\t\t\t\t\t<li id='business-info' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Business Information</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id='directors-info' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Directors Information</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id='authorise-details' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Authorise Personnel Details</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id='technology-contact' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Technology Person of contact</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id='jazzcash-consumer' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Jazzcash consumer app</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id='settlement-details' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Settlement Details</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li id='terms-conditions' class='company-detail-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div>Terms and Conditions</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class='company-detail-body'>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"business-info\">
\t\t\t\t\t\t\t\t\t\t";
        // line 371
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_business_information", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"directors-info\">
\t\t\t\t\t\t\t\t\t\t";
        // line 376
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_directors_information", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"authorise-details\">
\t\t\t\t\t\t\t\t\t\t";
        // line 381
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_authorize_personnel_detail", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"technology-contact\">
\t\t\t\t\t\t\t\t\t\t";
        // line 386
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_technology_person_of_conta", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"jazzcash-consumer\">
\t\t\t\t\t\t\t\t\t\t";
        // line 391
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_jazzcash_consumer_app", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"settlement-details\">
\t\t\t\t\t\t\t\t\t\t";
        // line 396
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_settlement_details", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"company-detail-item\">
\t\t\t\t\t\t\t\t\t<div data-item-name=\"terms-conditions\">
\t\t\t\t\t\t\t\t\t\t<h1>Please read and accept the terms and conditions</h1>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consec tetur adipiscing elit. Nam condimentum tempus diam, ultricies sollicitudin erat facilisis eget. Vestibulum rhoncus dui vel eros laoreet consectetur. Vivamus eget elementum ligula, vitae pharetra quam. Nullam at ligula
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                sed metu. Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Nam condimentum tempus diam, ultricies sollicitudin erat facilisis eget. Vestibulum rhoncus dui vel eros laoreet consectetur. Vivamus eget elementum ligula,
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                vitae pharetra quam. Nullam at ligula sed metu Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Nam condimentum tempus diam, ultricies sollicitudin erat facilisis eget. Vestibulum rhoncus dui vel eros laoreet consectetur.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                Vivamus eget elementum ligula, vitae pharetra quam. Nullam at ligula sed metu. Lorem ipsum dolor sit amet, consec tetur adipiscing elit. Nam condimentum tempus diam, ultricies sollicitudin erat facilisis eget. Vestibulum
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                rhoncus dui vel eros laoreet consectetur. Vivamus eget elementum ligula, vitae pharetra quam. Nullam at ligula sed metu
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t";
        // line 409
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_agreement", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<!-- STEP 5 -->

\t\t\t<div class=\"register-step\">
\t\t\t\t<h1 style=\"font-size: 30px;\">Please Upload the following documents</h1>
\t\t\t\t<p>Upload the certified copies of the following</p>
\t\t\t\t<div class='resolution-board'>
\t\t\t\t\t<ul class='resolution-board-sidebar list-unstyled'>
\t\t\t\t\t\t<div class=\"card mr-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Resolution' class='resolution-board-sidebar-item list-style-none'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 431
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/one.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>Resolution of Board of Directors
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Memorandum' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 447
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/two.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>Memorandum and Articles of Association</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Incorporation' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 462
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/three.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>Certificate of Incorporation</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Photocopies' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 477
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/four.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>Photocopies of CNIC of all the directors and persons authorized</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Directors' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 492
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/four.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>List of Directors on ‘Form-A/Form-B’</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Business' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 507
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/three.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>Certificate of Commencement of Business</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='NTN' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 522
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/four.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>NTN Certificate</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card mr-2 my-2\" style=\"border-radius: 1em;\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<li id='Branchless' class='resolution-board-sidebar-item'>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 536
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["workflow_path"] ?? null)), "html", null, true);
        echo "/two.png\" alt=\"image\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t\t\t\t\t\t\t<div>Level 2 Branchless Banking Account Form</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class='resolution-boardl-body'>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Resolution\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 549
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_resolution_of_board_of_dir", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Memorandum\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 555
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_memorandum_and_articles_of", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Incorporation\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 561
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_certificate_of_incorporati", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Photocopies\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 567
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_photocopies_of_cnic_of_all", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Directors\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 573
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_list_of_directors_on_form_", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Business\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 579
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_certificate_of_commencemen", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"NTN\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 585
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_ntn_certificate", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"resolution-board-item\">
\t\t\t\t\t\t\t<div class=\"custom-drop-container\" data-item-name=\"Branchless\">
\t\t\t\t\t\t\t\t<div class=\"custom-drop\">Upload files</div>
\t\t\t\t\t\t\t\t";
        // line 591
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["form"] ?? null), "field_level_2_branchless_banking", [], "array")), "html", null, true);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 599
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["form"] ?? null)), "field_level_2_branchless_banking", "field_ntn_certificate", "field_certificate_of_commencemen", "field_list_of_directors_on_form_", "field_photocopies_of_cnic_of_all", "field_certificate_of_incorporati", "field_memorandum_and_articles_of", "field_resolution_of_board_of_dir", "field_agreement", "field_settlement_details", "field_technology_person_of_conta", "field_jazzcash_consumer_app", "field_authorize_personnel_detail", "field_directors_information", "field_business_information", "field_company_type", "field_corporate_collections", "field_online_payment_gateway", "field_full_name", "field_name_of_business_company", "field_mobile_number", "email", "password", "account"), "html", null, true);
        // line 601
        echo "
\t\t";
    }

    // line 602
    public function getdumpIt($__params__ = null, $__prefix__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "params" => $__params__,
            "prefix" => $__prefix__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 603
            echo "\t\t\t<details>
\t\t\t\t<summary>";
            // line 604
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (("{{ " . $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null))) . " }}"), "html", null, true);
            echo "</summary>
\t\t\t\t";
            // line 605
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["params"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                // line 606
                echo "\t\t\t\t\t<div class=\"list-group-item\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<b>";
                // line 608
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((("{{ " . $this->sandbox->ensureToStringAllowed(($context["prefix"] ?? null))) . "[\"") . $this->sandbox->ensureToStringAllowed($context["n"])) . "\"] }}"), "html", null, true);
                echo "</b>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 612
            echo "\t\t\t</details>
\t\t";
        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modules/custom/user_edit/templates/custom-edit-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  800 => 612,  790 => 608,  786 => 606,  782 => 605,  778 => 604,  775 => 603,  762 => 602,  757 => 601,  755 => 599,  744 => 591,  735 => 585,  726 => 579,  717 => 573,  708 => 567,  699 => 561,  690 => 555,  681 => 549,  665 => 536,  648 => 522,  630 => 507,  612 => 492,  594 => 477,  576 => 462,  558 => 447,  539 => 431,  514 => 409,  498 => 396,  490 => 391,  482 => 386,  474 => 381,  466 => 376,  458 => 371,  411 => 326,  404 => 321,  385 => 304,  378 => 299,  358 => 281,  351 => 276,  318 => 246,  303 => 234,  290 => 224,  280 => 217,  258 => 198,  244 => 187,  231 => 177,  222 => 171,  194 => 146,  179 => 134,  166 => 124,  156 => 117,  134 => 98,  120 => 87,  107 => 77,  98 => 71,  58 => 33,  55 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/user_edit/templates/custom-edit-form.html.twig", "E:\\xampp\\htdocs\\islamabad\\onboarding_18-03_22\\modules\\custom\\user_edit\\templates\\custom-edit-form.html.twig");
    }
}
