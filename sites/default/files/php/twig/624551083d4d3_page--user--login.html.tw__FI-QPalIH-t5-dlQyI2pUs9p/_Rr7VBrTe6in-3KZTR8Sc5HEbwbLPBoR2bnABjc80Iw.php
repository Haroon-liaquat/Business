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

/* themes/contrib/bootstrap/templates/page--user--login.html.twig */
class __TwigTemplate_6bb72f98ff69cac17033778b73592f436c514fe0d865c95ba80d8114a9867196 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 1, "if" => 3, "block" => 4];
        $filters = ["clean_class" => 9, "escape" => 12, "t" => 21];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
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
        // line 1
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "fluid_container", [])) ? ("container-fluid") : ("container"));
        // line 3
        if (($this->getAttribute(($context["page"] ?? null), "navigation", []) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", []))) {
            // line 4
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 41
        echo "
";
        // line 43
        $this->displayBlock('main', $context, $blocks);
        // line 205
        echo "
";
        // line 206
        if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
            // line 207
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 4
    public function block_navbar($context, array $blocks = [])
    {
        // line 5
        echo "    ";
        // line 6
        $context["navbar_classes"] = [0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 8
($context["theme"] ?? null), "settings", []), "navbar_inverse", [])) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 9
($context["theme"] ?? null), "settings", []), "navbar_position", [])) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", []), "navbar_position", []))))) : (($context["container"] ?? null)))];
        // line 12
        echo "    <header";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method")), "html", null, true);
        echo " id=\"navbar\" role=\"banner\">
      ";
        // line 13
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 14
            echo "        <div class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
            echo "\">
      ";
        }
        // line 16
        echo "      <div class=\"navbar-header\">
        ";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation", [])), "html", null, true);
        echo "
        ";
        // line 19
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 20
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation"));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 27
        echo "      </div>

      ";
        // line 30
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])) {
            // line 31
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 32
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 35
        echo "      ";
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", [0 => ($context["container"] ?? null)], "method")) {
            // line 36
            echo "        </div>
      ";
        }
        // line 38
        echo "    </header>
  ";
    }

    // line 43
    public function block_main($context, array $blocks = [])
    {
        // line 44
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 48
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 49
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 54
            echo "      ";
        }
        // line 55
        echo "
      ";
        // line 57
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 58
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 63
            echo "      ";
        }
        // line 64
        echo "
      ";
        // line 66
        echo "      ";
        // line 67
        $context["content_classes"] = [0 => ((($this->getAttribute(        // line 68
($context["page"] ?? null), "sidebar_first", []) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 69
($context["page"] ?? null), "sidebar_first", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 70
($context["page"] ?? null), "sidebar_second", []) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 71
($context["page"] ?? null), "sidebar_first", [])) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])))) ? ("col-sm-12") : (""))];
        // line 74
        echo "      <section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method")), "html", null, true);
        echo ">

        ";
        // line 77
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 78
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 81
            echo "        ";
        }
        // line 82
        echo "
        ";
        // line 84
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", [])) {
            // line 85
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 88
            echo "        ";
        }
        // line 89
        echo "
        ";
        // line 91
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 192
        echo "      </section>

      ";
        // line 195
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 196
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 201
            echo "      ";
        }
        // line 202
        echo "    </div>
  </div>
";
    }

    // line 49
    public function block_header($context, array $blocks = [])
    {
        // line 50
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 51
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
        ";
    }

    // line 58
    public function block_sidebar_first($context, array $blocks = [])
    {
        // line 59
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 78
    public function block_highlighted($context, array $blocks = [])
    {
        // line 79
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
        echo "</div>
          ";
    }

    // line 85
    public function block_help($context, array $blocks = [])
    {
        // line 86
        echo "            ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "help", [])), "html", null, true);
        echo "
          ";
    }

    // line 91
    public function block_content($context, array $blocks = [])
    {
        // line 92
        echo "          <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-6\">
            <!--featured-imagebox-->
            <div class=\"featured-imagebox \">
                <div class=\"ttm-box-view-content-inner\">
                    <!-- featured-thumbnail -->
                    <div>
                        <img class=\"img-fluid\" src=\"";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/Group.png\" alt=\"image\">
                        <br>
                        <br>
                        <h2> Developers</h2>
                        <p>As a Developers account you'll get</p><br>
                        <p> &nbsp;&nbsp; ✔ &nbsp;&nbsp;An account in your own name</p>
                        <p> &nbsp;&nbsp; ✔&nbsp;&nbsp;Two personal cards in your name</p>
                        <p>&nbsp; &nbsp;✔&nbsp;&nbsp;Access for your accountant</p>
                        <br>
                    
                        <p>We bring together everything that’s required to build <br> websites and apps that accept payments and send <br> payouts. </p>
                    </div><!-- featured-thumbnail end-->
                </div>
                
            </div><!-- featured-imagebox end-->
        </div>
        <div style=\"background-color: #E5E5E5;\" class=\"col-sm-6\">
            <!--featured-imagebox-->
            <div style=\"margin-top: 5rem;\" class=\"featured-imagebox \">
                <div class=\"ttm-box-view-content-inner\">
                    <div class=\"featured-content\">
                        <div class=\"featured-title\">
                            <img src=\"";
        // line 122
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/Group_2.png\" style=\"float: left; margin-left: 3rem; margin-top: 1rem;\" alt=\"\">
                            <h3 style=\"margin-left: 7rem;\">Welcome back to the <br>
                                JazzCash Developer Portal<br><br></h3>
                        </div>
                        <div style=\"margin-left:3rem ;\" class=\"featured-desc\">
                            <p>Test your applications before going live and enable access to 
                                JazzCash customers<br><br></p> <br><br><br>
                                
                                <div style=\"margin-left: -1rem;\" class=\"col-md-11\">
                                  
                                   <form class=\"user-login-form\" data-drupal-selector=\"user-login-form\" action=\"\" method=\"post\" id=\"user-login-form\" accept-charset=\"UTF-8\">
  

                                        <div class=\"form-item js-form-item form-type-textfield js-form-type-textfield form-item-name js-form-item-name form-group\">
                                        <label for=\"edit-name\" class=\"control-label js-form-required form-required\">Username</label>
                                        <input autocorrect=\"none\" autocapitalize=\"none\" spellcheck=\"false\" autofocus=\"autofocus\" data-drupal-selector=\"edit-name\" class=\"form-text required form-control\" type=\"text\" id=\"edit-name\" name=\"name\" value=\"\" size=\"60\" maxlength=\"60\" required=\"required\" aria-required=\"true\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Enter your jazzcash username.\">
                                        </div>
                                        <div class=\"form-item js-form-item form-type-password js-form-type-password form-item-pass js-form-item-pass form-group\">
                                        <label for=\"edit-pass\" class=\"control-label js-form-required form-required\">Password</label>
                                        <input data-drupal-selector=\"edit-pass\" class=\"form-text required form-control\" type=\"password\" id=\"edit-pass\" name=\"pass\" size=\"60\" maxlength=\"128\" required=\"required\" aria-required=\"true\" title=\"\" data-toggle=\"tooltip\" data-original-title=\"Enter the password that accompanies your username.\">
                                        </div>
                                        <input autocomplete=\"off\" data-drupal-selector=\"form-s8xoeb2npqnf7fhhsyp2mh-hs-pffq6ifgg6ytw-nue\" type=\"hidden\" name=\"form_build_id\" value=\"form-s8xoEb2NpQNF7FHHsyP2MH-hs-pfFq6IFgg6YTW-NuE\">
                                        <input data-drupal-selector=\"edit-user-login-form\" type=\"hidden\" name=\"form_id\" value=\"user_login_form\">
                                        <div data-drupal-selector=\"edit-actions\" class=\"form-actions form-group js-form-wrapper form-wrapper\" id=\"edit-actions\">
                                       
                                        <button data-drupal-selector=\"edit-submit\" class=\"button js-form-submit form-submit btn-primary btn icon-before login-form-submit\" type=\"submit\" id=\"edit-submit\" name=\"op\" value=\"Log in\"><span class=\"icon glyphicon glyphicon-log-in\" aria-hidden=\"true\"></span>
                                        Log in</button>

                                        </div>



                                    </form>
                                    
                                </div>
                                <br>
                                <div class=\"row\">
                                <div class=\"col-8\"></div>
                                ";
        // line 161
        echo "                                
                                </div>

                                
                                
                                    
                                
                                
                                <br><br><br><br>
                                <div style=\"width: 100%; \" class=\"col-md-11\">
                                <hr>
                                </div>
                                <p style=\"float: left;\">&nbsp;&nbsp;&nbsp;Don’t have an account? &nbsp;&nbsp;</p>
                                <a style=\"color: #FFC20C; \" href=\"";
        // line 174
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)), "html", null, true);
        echo "register\"><b>Sign Up</b></a>
                        
                                <div class=\"subscribe-response\"></div>
                        
                                
                            </div>

                </div>
                
                    
                </div>
            </div><!-- featured-imagebox end-->
        </div>
        
        
    </div>
</div>
        ";
    }

    // line 196
    public function block_sidebar_second($context, array $blocks = [])
    {
        // line 197
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 198
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
        echo "
          </aside>
        ";
    }

    // line 207
    public function block_footer($context, array $blocks = [])
    {
        // line 208
        echo "    <footer class=\"footer ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null)), "html", null, true);
        echo "\" role=\"contentinfo\">
      ";
        // line 209
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
        echo "
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/contrib/bootstrap/templates/page--user--login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 209,  432 => 208,  429 => 207,  422 => 198,  419 => 197,  416 => 196,  394 => 174,  379 => 161,  338 => 122,  313 => 100,  303 => 92,  300 => 91,  293 => 86,  290 => 85,  283 => 79,  280 => 78,  273 => 60,  270 => 59,  267 => 58,  260 => 51,  257 => 50,  254 => 49,  248 => 202,  245 => 201,  242 => 196,  239 => 195,  235 => 192,  232 => 91,  229 => 89,  226 => 88,  223 => 85,  220 => 84,  217 => 82,  214 => 81,  211 => 78,  208 => 77,  202 => 74,  200 => 71,  199 => 70,  198 => 69,  197 => 68,  196 => 67,  194 => 66,  191 => 64,  188 => 63,  185 => 58,  182 => 57,  179 => 55,  176 => 54,  173 => 49,  170 => 48,  163 => 44,  160 => 43,  155 => 38,  151 => 36,  148 => 35,  142 => 32,  139 => 31,  136 => 30,  132 => 27,  123 => 21,  120 => 20,  117 => 19,  113 => 17,  110 => 16,  104 => 14,  102 => 13,  97 => 12,  95 => 9,  94 => 8,  93 => 6,  91 => 5,  88 => 4,  82 => 207,  80 => 206,  77 => 205,  75 => 43,  72 => 41,  68 => 4,  66 => 3,  64 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap/templates/page--user--login.html.twig", "E:\\xampp\\htdocs\\islamabad\\onboarding_18-03_22\\themes\\contrib\\bootstrap\\templates\\page--user--login.html.twig");
    }
}
