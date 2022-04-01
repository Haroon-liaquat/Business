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

/* modules/custom/user_profile_current/templates/user-profile-current-block.html.twig */
class __TwigTemplate_f4644d72c7e908fc6feb3ebda2b39043dbe378c44ee62d5b181f5fe8e9b0ed45 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 11, "for" => 22, "if" => 36];
        $filters = ["escape" => 31];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape'],
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
        // line 11
        $context["classes"] = [0 => "clear-both", 1 => "user-count-block"];
        // line 15
        echo "



";
        // line 20
        echo "

";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["data"] ?? null), "content", []));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 23
            echo "  



  <div class=\"container\">
    <div style=\"border-radius: 18px;\" class=\"panel panel-default\">
      <div class=\"row\">
        <div class=\"col-xs-6 col-sm-6 col-lg-6\">
          <div class=\"panel-body merchant-profile-image\"><img src=\"";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "image", [])), "html", null, true);
            echo "\"></div>
        </div>
        <div class=\"col-xs-6 col-sm-6 col-lg-6\">
          <div class=\"panel-body pull-right\"><button type=\"button\" class=\"btn btn-circle\">
          ";
            // line 36
            echo "          ";
            if (($this->getAttribute($context["content"], "businessstatus", []) == "Approved")) {
                // line 37
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "bankstatus", [])), "html", null, true);
                echo "
          ";
            } elseif (($this->getAttribute(            // line 38
$context["content"], "status", []) == "Approved")) {
                // line 39
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "businessstatus", [])), "html", null, true);
                echo "
          ";
            } else {
                // line 41
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "status", [])), "html", null, true);
                echo "
          ";
            }
            // line 43
            echo "          </button>
          </div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-xs-6 col-sm-6 col-lg-6\">
          <div class=\"panel-body\">";
            // line 50
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "full_name", [])), "html", null, true);
            echo "</div>
        </div>
        <div class=\"col-xs-6 col-sm-6 col-lg-6\">
          <div class=\"panel-body pull-right\">Contact Number: ";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "mobile", [])), "html", null, true);
            echo " <img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
        </div>
      </div>

      <div class=\"row\">
        <div class=\"col-xs-6 col-sm-6 col-lg-6\">
          <div class=\"panel-body\">";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "company_type", [])), "html", null, true);
            echo "</div>
        </div>
        <div class=\"col-xs-6 col-sm-6 col-lg-6\">
          <div class=\"panel-body pull-right\">Email Address: ";
            // line 62
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "email", [])), "html", null, true);
            echo " <img src=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
        </div>
      </div>
    </div>
  </div>



  <div class=\"container\">

    <div style=\"border-color: #FFE085;\" class=\"panel panel-warning\">
      <div class=\"row\">
        <div class=\"col-xs-2 col-sm-2 col-lg-2\">
          <div class=\"panel-body\"><img src=\"";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-more-details-30.png\"></div>
        </div>
        <div class=\"col-xs-7 col-sm-7 col-lg-7\">
          <div class=\"panel-body\"><b>Business Information</b></div>
        </div>
        <div class=\"col-xs-1 col-sm-1 col-lg-1\">
          <div class=\"panel-body pull-right\"> <img src=\"";
            // line 81
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
        </div>
        <div class=\"col-xs-1 col-sm-1 col-lg-1\">
          <div class=\"panel-body pull-right\"><img src=\"";
            // line 84
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-chevron-24.png\"></div>
        </div>
      </div>


    </div>
  </div>





  <div class=\"container\">
    <div class=\"col-sm-12\">
      <table style=\"width:100%\">
      ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "business", []));
            foreach ($context['_seq'] as $context["_key"] => $context["paras"]) {
                // line 100
                echo "        <tr>
          <td>Business Name:</td>
          <td><b>";
                // line 102
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "business_name", [])), "html", null, true);
                echo "</b></td>
          <td>Business Mailing Address</td>
          <td><b>";
                // line 104
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "business_mailing_address", [])), "html", null, true);
                echo "</b></td>
        </tr>
        <tr>
          <td>Phone </td>
          <td><b>";
                // line 108
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "phone", [])), "html", null, true);
                echo "</b></td>
          <td>Fax No</td>
          <td><b>";
                // line 110
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "fax_number", [])), "html", null, true);
                echo "</b></td>
        </tr>
        <tr>
          <td>Email Address</td>
          <td><b>";
                // line 114
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "email_address", [])), "html", null, true);
                echo "</b></td>
          <td>Nature of Business</td>
          <td><b>";
                // line 116
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "nature_of_business", [])), "html", null, true);
                echo "</b></td>
        </tr>
        <tr>
          <td>Date and place of Incorp.</td>
          <td><b>";
                // line 120
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "date_of_incorporation", [])), "html", null, true);
                echo "</b></td>
          <td>NTN</td>
          <td><b>";
                // line 122
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "ntn_number", [])), "html", null, true);
                echo "</b></td>
        </tr>
        <tr>
          <td>NTN Issuing Authority</td>
          <td><b>";
                // line 126
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "ntn_issuing_authority", [])), "html", null, true);
                echo "</b></td>
          <td>NTN Date of Issue</td>
          <td><b>";
                // line 128
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "ntn_date_of_issue", [])), "html", null, true);
                echo "</b></td>
        </tr>
        <tr>
          <td>Registration Date</td>
          <td><b>";
                // line 132
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "registration_date", [])), "html", null, true);
                echo "</b></td>
          <td>Monthly Turnover</td>
          <td><b>Rs ";
                // line 134
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "monthly_turnover", [])), "html", null, true);
                echo "</b></td>
        </tr>
        <tr>
          <td>Number of employees</td>
          <td><b>";
                // line 138
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "number_of_employees", [])), "html", null, true);
                echo "</b></td>
          <td>Frequency of salary disbursements</td>
          <td><b>";
                // line 140
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "frequency_of_salary_disbur", [])), "html", null, true);
                echo "</b></td>
        </tr>
        <tr>
          <td>Average Salary amount</td>
          <td><b>Rs. ";
                // line 144
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["paras"], "average_salary_amount", [])), "html", null, true);
                echo "</b></td>

        </tr>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paras'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "      </table>
    </div>
  </div>


  <div class=\"container\">
    <div  style=\"border-color: #FFE085;\" class=\"panel panel-warning\">
      <div class=\"row\">
        <div class=\"col-xs-2 col-sm-2 col-lg-2\">
          <div class=\"panel-body\"><img src=\"";
            // line 157
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-more-details-30.png\"></div>
        </div>
        <div class=\"col-xs-7 col-sm-7 col-lg-7\">
          <div class=\"panel-body\"><b>Directors Information</b></div>
        </div>
        <div class=\"col-xs-1 col-sm-1 col-lg-1\">
          <div class=\"panel-body pull-right\"> <img src=\"";
            // line 163
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
        </div>
        <div class=\"col-xs-1 col-sm-1 col-lg-1\">
          <div class=\"panel-body pull-right\"><img src=\"";
            // line 166
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-chevron-24.png\"></div>
        </div>
      </div>
    </div>
  </div>



  <div class=\"container\">
    <table style=\"width:100%\">
    ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "directors", []));
            foreach ($context['_seq'] as $context["_key"] => $context["dparas"]) {
                // line 177
                echo "      <tr>
        <td>Full Name</td>
        <td><b>";
                // line 179
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["dparas"], "full_name", [])), "html", null, true);
                echo "</b></td>
        <td>Official Email</td>
        <td><b>";
                // line 181
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["dparas"], "official_email", [])), "html", null, true);
                echo "</b></td>
      </tr>
      <tr>
        <td>Contact no</td>
        <td><b>";
                // line 185
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["dparas"], "contact_number", [])), "html", null, true);
                echo "</b></td>
        <td>Title</td>
        <td><b>";
                // line 187
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["dparas"], "title", [])), "html", null, true);
                echo "</b></td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dparas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "    </table>
  </div>


  <div class=\"container\">
    <div  style=\"border-color: #FFE085;\" class=\"panel panel-warning\">
      <div class=\"row\">
        <div class=\"col-xs-2 col-sm-2 col-lg-2\">
          <div class=\"panel-body\"><img src=\"";
            // line 198
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-more-details-30.png\"></div>
        </div>
        <div class=\"col-xs-7 col-sm-7 col-lg-7\">
          <div class=\"panel-body\"><b>Technology Person of contact</b></div>
        </div>
        <div class=\"col-xs-1 col-sm-1 col-lg-1\">
          <div class=\"panel-body pull-right\"> <img src=\"";
            // line 204
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
        </div>
        <div class=\"col-xs-1 col-sm-1 col-lg-1\">
          <div class=\"panel-body pull-right\"><img src=\"";
            // line 207
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-chevron-24.png\"></div>
        </div>
      </div>
    </div>
  </div>


  <div class=\"container\">
    <table style=\"width:100%\">
    ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "technology", []));
            foreach ($context['_seq'] as $context["_key"] => $context["tparas"]) {
                // line 217
                echo "      <tr>
        <td>Full Name</td>
        <td><b>";
                // line 219
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tparas"], "name", [])), "html", null, true);
                echo "</b></td>
        <td>Official Email</td>
        <td><b>";
                // line 221
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tparas"], "email", [])), "html", null, true);
                echo "</b></td>
      </tr>
      <tr>
        <td>Contact no</td>
        <td><b>";
                // line 225
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["tparas"], "contact", [])), "html", null, true);
                echo "</b></td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tparas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 228
            echo "    </table>
  </div>


  <div class=\"container\">
    <div  style=\"border-color: #FFE085;\" class=\"panel panel-warning\">
      <div class=\"row\">
        <div class=\"col-xs-2 col-sm-2 col-lg-2\">
          <div class=\"panel-body\"><img src=\"";
            // line 236
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-more-details-30.png\"></div>
        </div>
        <div class=\"col-xs-7 col-sm-7 col-lg-7\">
          <div class=\"panel-body\"><b>Authorise Personnel Details</b></div>
        </div>
        <div class=\"col-xs-1 col-sm-1 col-lg-1\">
          <div class=\"panel-body pull-right\"> <img src=\"";
            // line 242
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
        </div>
        <div class=\"col-xs-1 col-sm-1 col-lg-1\">
          <div class=\"panel-body pull-right\"><img src=\"";
            // line 245
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-chevron-24.png\"></div>
        </div>
      </div>
    </div>
  </div>


  <div class=\"container\">
    <table style=\"width:100%\">
    ";
            // line 254
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "authorize", []));
            foreach ($context['_seq'] as $context["_key"] => $context["aparas"]) {
                // line 255
                echo "      <tr>
        <td>Full Name</td>
        <td><b>";
                // line 257
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["aparas"], "name", [])), "html", null, true);
                echo "</b></td>
        <td>Official Email</td>
        <td><b>";
                // line 259
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["aparas"], "email", [])), "html", null, true);
                echo "</b></td>
      </tr>
      <tr>
        <td>Contact no</td>
        <td><b>";
                // line 263
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["aparas"], "contact", [])), "html", null, true);
                echo "</b></td>
        <td>Title</td>
        <td><b>";
                // line 265
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["aparas"], "title", [])), "html", null, true);
                echo "</b></td>
      </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aparas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            echo "    </table>
  </div>


  <div class=\"container\">
    <div  style=\"border-color: #FFE085;\" class=\"panel panel-warning\">
      <div class=\"row\">
        <div class=\"col-xs-2 col-sm-2 col-lg-2\">
          <div class=\"panel-body\"><img src=\"";
            // line 276
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-more-details-30.png\"></div>
        </div>
        <div class=\"col-xs-7 col-sm-7 col-lg-7\">
          <div class=\"panel-body\"><b>Authorise Personnel Details</b></div>
        </div>
        <div class=\"col-xs-1 col-sm-1 col-lg-1\">
          <div class=\"panel-body pull-right\"> <img src=\"";
            // line 282
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
        </div>
        <div class=\"col-xs-1 col-sm-1 col-lg-1\">
          <div class=\"panel-body pull-right\"><img src=\"";
            // line 285
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-chevron-24.png\"></div>
        </div>
      </div>
    </div>
  </div>



  <div class=\"container\">
    <table style=\"width:100%\">
    ";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "settelment", []));
            foreach ($context['_seq'] as $context["_key"] => $context["sparas"]) {
                // line 296
                echo "      <tr>
        <td>Bank Name</td>
        <td><b>";
                // line 298
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["sparas"], "bank_name", [])), "html", null, true);
                echo "</b></td>
        <td>Acc Holder Name</td>
        <td><b>";
                // line 300
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["sparas"], "account_holder_name", [])), "html", null, true);
                echo "</b></td>
      </tr>
      <tr>
        <td>Bank Account No</td>
        <td><b>";
                // line 304
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["sparas"], "bank_account_number", [])), "html", null, true);
                echo "</b></td>
        <td>Acc Holder Mobile No</td>
        <td><b>";
                // line 306
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["sparas"], "account_holder_mobile_numb", [])), "html", null, true);
                echo "</b></td>
      </tr>
      <tr>
        <td>Acc Holder Email</td>
        <td><b>";
                // line 310
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["sparas"], "account_holder_email", [])), "html", null, true);
                echo "</b></td>
      </tr>
       ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sparas'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 313
            echo "    </table>
  </div>






  <div class=\"container\">

    <div   class=\"panel panel-warning\" style=\"background-color: #FFE8A4;\">
      <div class=\"row\">
        <div class=\"col-xs-2 col-sm-2 col-lg-2\">
          <div class=\"panel-body\"> <img src=\"";
            // line 326
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/API.png\"></div>
        </div>
        <div class=\"col-xs-10 col-sm-10 col-lg-10\">
          <div class=\"panel-body\">Do you need API - Payment Gateway Portal Access?.</div>
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-lg-12\">
              <div class=\"panel-body\">We will email you the credentals to your Tech POC.</div>
            </div>
          </div>
          <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-lg-12\">
              <div class=\"panel-body\">Api Intergration</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>









  <div class=\"container\">
    <div class=\"row \">
      <div class=\"col-md-4 col-sm-4 \">
        <div  class=\"panel panel-default\" style=\"background-color: #FCFCFC\">
          <div class=\"row\">
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body \"><img
                  src=\"";
            // line 360
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-engineering-drawing-applications-with-parts-and-details-24.png\"></div>
            </div>
            <div class=\"col-xs-6 col-sm-6 col-lg-6\">
              <div class=\"row\">
             
                <div class=\"panel-body\">Certificate of Commencement of Business</div>
              </div>
              <div class=\"row\">
                <div class=\"panel-body\">
                  <ul>
                    ";
            // line 370
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "Certificate_of_Commencement_of_Business", []));
            foreach ($context['_seq'] as $context["_key"] => $context["file_url"]) {
                // line 371
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["file_url"]), "html", null, true);
                echo "\">Download Certificate of Commencement of Business</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file_url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 373
            echo "                  </ul>
              </div>
              </div>
            </div>
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body pull-right\"> <img src=\"";
            // line 378
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-4\">
        <div class=\"panel panel-default\" style=\"background-color: #FCFCFC\">
          <div class=\"row\">
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body \"><img
                  src=\"";
            // line 388
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-engineering-drawing-applications-with-parts-and-details-24.png\"></div>
            </div>
            <div class=\"col-xs-6 col-sm-6 col-lg-6\">
              <div class=\"row\">
                <div class=\"panel-body\">Certificate of Incorporation</div>
              </div>
              <div class=\"row\">
                <div class=\"panel-body\">
                  <ul>
                    ";
            // line 397
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "certificate_of_incorporati", []));
            foreach ($context['_seq'] as $context["_key"] => $context["file_url_certificate_of_incorporati"]) {
                // line 398
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["file_url_certificate_of_incorporati"]), "html", null, true);
                echo "\">Download certificate of incorporation</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file_url_certificate_of_incorporati'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 400
            echo "                  </ul>
                </div>
              </div>
            </div>
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body pull-right\"> <img src=\"";
            // line 405
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 col-sm-4\">
        <div class=\"panel panel-default\" style=\"background-color: #FCFCFC\">
          <div class=\"row\">
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body \"><img
                  src=\"";
            // line 415
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-engineering-drawing-applications-with-parts-and-details-24.png\"></div>
            </div>
            <div class=\"col-xs-6 col-sm-6 col-lg-6\">
              <div class=\"row\">
               <div class=\"panel-body\">Level 2 Branchless Banking Account Form</div>
              </div>
              <div class=\"row\">
                <div class=\"panel-body\">
                  <ul>
                    ";
            // line 424
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "level_2_branchless_banking", []));
            foreach ($context['_seq'] as $context["_key"] => $context["file_url_field_level_2_branchless_banking"]) {
                // line 425
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["file_url_field_level_2_branchless_banking"]), "html", null, true);
                echo "\">Download level 2 branchless banking</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file_url_field_level_2_branchless_banking'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 427
            echo "                  </ul>
                </div>
              </div>
            </div>
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body pull-right\"> <img src=\"";
            // line 432
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-xs-4 col-sm-4 col-lg-4\">
        <div class=\"panel panel-default\" style=\"background-color: #FCFCFC\">
          <div class=\"row\">
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body \"><img
                  src=\"";
            // line 444
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-engineering-drawing-applications-with-parts-and-details-24.png\"></div>
            </div>
            <div class=\"col-xs-6 col-sm-6 col-lg-6\">
              <div class=\"row\">


                <div class=\"panel-body\">List of Directors on ‘Form-A/Form-B’</div>
              </div>
              <div class=\"row\">
                <div class=\"panel-body\">
                  <ul>
                    ";
            // line 455
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "list_of_directors_on_form_", []));
            foreach ($context['_seq'] as $context["_key"] => $context["file_url_list_of_directors_on_form_"]) {
                // line 456
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["file_url_list_of_directors_on_form_"]), "html", null, true);
                echo "\">Download list of directors on form</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file_url_list_of_directors_on_form_'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 458
            echo "                  </ul>
                </div>
              </div>
            </div>
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body pull-right\"> <img src=\"";
            // line 463
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-xs-4 col-sm-4 col-lg-4\">
        <div class=\"panel panel-default\" style=\"background-color: #FCFCFC\">
          <div class=\"row\">
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body \"><img
                  src=\"";
            // line 473
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-engineering-drawing-applications-with-parts-and-details-24.png\"></div>
            </div>

            <div class=\"col-xs-6 col-sm-6 col-lg-6\">
              <div class=\"row\">

                <div class=\"panel-body\">Photocopies of CNIC of all the directors and persons authorized</div>
              </div>
              <div class=\"row\">
                <div class=\"panel-body\">
                   <ul>
                      ";
            // line 484
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "photocopies_of_cnic_of_all", []));
            foreach ($context['_seq'] as $context["_key"] => $context["file_url_photocopies_of_cnic_of_all"]) {
                // line 485
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["file_url_photocopies_of_cnic_of_all"]), "html", null, true);
                echo "\">Download photocopies of cnic of all</a></li>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file_url_photocopies_of_cnic_of_all'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 487
            echo "                    </ul>
                </div>
              </div>
            </div>
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body pull-right\"> <img src=\"";
            // line 492
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-xs-4 col-sm-4 col-lg-4\">
        <div class=\"panel panel-default\" style=\"background-color: #FCFCFC\">
          <div class=\"row\">
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body \"><img
                  src=\"";
            // line 502
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-engineering-drawing-applications-with-parts-and-details-24.png\"></div>
            </div>

        <div class=\"col-xs-6 col-sm-6 col-lg-6\">
              <div class=\"row\">
                <div class=\"panel-body\">Resolution of Board of Directors</div>
              </div>
              <div class=\"row\">
                <div class=\"panel-body\">
                  <ul>
                    ";
            // line 512
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "resolution_of_board_of_dir", []));
            foreach ($context['_seq'] as $context["_key"] => $context["file_url_resolution_of_board_of_dir"]) {
                // line 513
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["file_url_resolution_of_board_of_dir"]), "html", null, true);
                echo "\">Download resolution of board of dir</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file_url_resolution_of_board_of_dir'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 515
            echo "                  </ul>
                </div>
              </div>
            </div>
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body pull-right\"> <img src=\"";
            // line 520
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-xs-4 col-sm-4 col-lg-4\">
        <div class=\"panel panel-default\" style=\"background-color: #FCFCFC\">
          <div class=\"row\">
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body \"><img
                  src=\"";
            // line 530
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-engineering-drawing-applications-with-parts-and-details-24.png\"></div>
            </div>

                        <div class=\"col-xs-6 col-sm-6 col-lg-6\">
              <div class=\"row\">
                <div class=\"panel-body\">Memorandum and Articles of Association</div>
              </div>
              <div class=\"row\">
                <div class=\"panel-body\">
                  <ul>
                    ";
            // line 540
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "memorandum_and_articles_of", []));
            foreach ($context['_seq'] as $context["_key"] => $context["file_url_memorandum_and_articles_of"]) {
                // line 541
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["file_url_memorandum_and_articles_of"]), "html", null, true);
                echo "\">Download file url memorandum and articles of</a></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file_url_memorandum_and_articles_of'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 543
            echo "                  </ul>
                </div>
              </div>
            </div>
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body pull-right\"> <img src=\"";
            // line 548
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-xs-4 col-sm-4 col-lg-4\">
        <div class=\"panel panel-default\" style=\"background-color: #FCFCFC\">
          <div class=\"row\">
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body \"><img
                  src=\"";
            // line 558
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-engineering-drawing-applications-with-parts-and-details-24.png\"></div>
            </div>


            <div class=\"col-xs-6 col-sm-6 col-lg-6\">
              <div class=\"row\">
              <div class=\"panel-body\">NTN Certificate</div>
              </div>
              <div class=\"row\">
                <div class=\"panel-body\">
                  <ul>
                  ";
            // line 569
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["content"], "ntn_certificate", []));
            foreach ($context['_seq'] as $context["_key"] => $context["file_url_ntn_certificate"]) {
                // line 570
                echo "                      <li><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["file_url_ntn_certificate"]), "html", null, true);
                echo "\">Download file url ntn certificate</a></li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file_url_ntn_certificate'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 572
            echo "                  </ul>
                </div>
              </div>
            </div>
            <div class=\"col-xs-3 col-sm-3 col-lg-3\">
              <div class=\"panel-body pull-right\"> <img src=\"";
            // line 577
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class=\"container\">
    <div  style=\"border-color: #FFE085;\" class=\"panel panel-warning\">
      <div class=\"row\">
        <div class=\"col-xs-2 col-sm-2 col-lg-2\">
          <div class=\"panel-body\"><img src=\"";
            // line 590
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-more-details-30.png\"></div>
        </div>
        <div class=\"col-xs-7 col-sm-7 col-lg-7\">
          <div class=\"panel-body\"><b>Bank Approver Details</b></div>
        </div>
        <div class=\"col-xs-1 col-sm-1 col-lg-1\">
          <div class=\"panel-body pull-right\"><img src=\"";
            // line 596
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/greencheck.png\"></div>
        </div>
        <div class=\"col-xs-1 col-sm-1 col-lg-1\">
          <div class=\"panel-body pull-right\"><img src=\"";
            // line 599
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_profile_image_path"] ?? null)), "html", null, true);
            echo "/icons8-chevron-24.png\"></div>
        </div>
      </div>
    </div>
  </div>


    
";
            // line 661
            echo "<div class=\"container\">
    <table style=\"width:100%\">
      <tr>
        <td>Agent ID1</td>
        <td>";
            // line 665
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "lastUpdatedByUserName", [])), "html", null, true);
            echo "</td>
        <td><b>";
            // line 666
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["bparas"] ?? null), "agentid", [])), "html", null, true);
            echo " </b></td>
        <td>Account Opener Approval</td>
        <td><b>";
            // line 668
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "status", [])), "html", null, true);
            echo "</b></td>
      </tr>
      <tr>
        <td></td>
        <td><b></b></td>
        <td></td>
        <td>Business Approval</td>
        ";
            // line 675
            if (($this->getAttribute($context["content"], "status", []) == "Approved")) {
                // line 676
                echo "        <td><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "businessstatus", [])), "html", null, true);
                echo " </b></td>
        ";
            } else {
                // line 678
                echo "          <td><b>Pending</b></td>
          ";
            }
            // line 680
            echo "      </tr>
      <tr>
      <td></td>
        <td></td>
        <td></td>
        <td>Bank Approval</td>
        ";
            // line 686
            if (($this->getAttribute($context["content"], "businessstatus", []) == "Approved")) {
                // line 687
                echo "        <td><b>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["content"], "bankstatus", [])), "html", null, true);
                echo " </b></td>
        ";
            } else {
                // line 689
                echo "          <td><b>Pending</b></td>
          ";
            }
            // line 691
            echo "      </tr>
      
    </table>
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "modules/custom/user_profile_current/templates/user-profile-current-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1093 => 691,  1089 => 689,  1083 => 687,  1081 => 686,  1073 => 680,  1069 => 678,  1063 => 676,  1061 => 675,  1051 => 668,  1046 => 666,  1042 => 665,  1036 => 661,  1025 => 599,  1019 => 596,  1010 => 590,  994 => 577,  987 => 572,  978 => 570,  974 => 569,  960 => 558,  947 => 548,  940 => 543,  931 => 541,  927 => 540,  914 => 530,  901 => 520,  894 => 515,  885 => 513,  881 => 512,  868 => 502,  855 => 492,  848 => 487,  839 => 485,  835 => 484,  821 => 473,  808 => 463,  801 => 458,  792 => 456,  788 => 455,  774 => 444,  759 => 432,  752 => 427,  743 => 425,  739 => 424,  727 => 415,  714 => 405,  707 => 400,  698 => 398,  694 => 397,  682 => 388,  669 => 378,  662 => 373,  653 => 371,  649 => 370,  636 => 360,  599 => 326,  584 => 313,  575 => 310,  568 => 306,  563 => 304,  556 => 300,  551 => 298,  547 => 296,  543 => 295,  530 => 285,  524 => 282,  515 => 276,  505 => 268,  496 => 265,  491 => 263,  484 => 259,  479 => 257,  475 => 255,  471 => 254,  459 => 245,  453 => 242,  444 => 236,  434 => 228,  425 => 225,  418 => 221,  413 => 219,  409 => 217,  405 => 216,  393 => 207,  387 => 204,  378 => 198,  368 => 190,  359 => 187,  354 => 185,  347 => 181,  342 => 179,  338 => 177,  334 => 176,  321 => 166,  315 => 163,  306 => 157,  295 => 148,  285 => 144,  278 => 140,  273 => 138,  266 => 134,  261 => 132,  254 => 128,  249 => 126,  242 => 122,  237 => 120,  230 => 116,  225 => 114,  218 => 110,  213 => 108,  206 => 104,  201 => 102,  197 => 100,  193 => 99,  175 => 84,  169 => 81,  160 => 75,  142 => 62,  136 => 59,  125 => 53,  119 => 50,  110 => 43,  104 => 41,  98 => 39,  96 => 38,  91 => 37,  88 => 36,  81 => 31,  71 => 23,  67 => 22,  63 => 20,  57 => 15,  55 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/user_profile_current/templates/user-profile-current-block.html.twig", "E:\\xampp\\htdocs\\islamabad\\onboarding_18-03_22\\modules\\custom\\user_profile_current\\templates\\user-profile-current-block.html.twig");
    }
}
