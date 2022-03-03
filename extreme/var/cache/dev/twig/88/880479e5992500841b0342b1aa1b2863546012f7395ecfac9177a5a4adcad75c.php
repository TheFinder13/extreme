<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* menu/menu.html.twig */
class __TwigTemplate_3a3c4cc344e80febe7a3980f79d87f2d11170ad5bfc224d30a610789df62b4b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "menu/menu.html.twig"));

        // line 1
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

<main class=\"site-wrapper\">
    <div class=\"pt-table desktop-768\">
        <div class=\"pt-tablecell page-home relative\" style=\"background-image: url(https://images.unsplash.com/photo-1486870591958-9b9d0d1dda99?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80);
    background-position: center;
    background-size: cover;\">
            <div class=\"overlay\"></div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8\">
                        <div class=\"page-title  home text-center\">
                                  <span class=\"heading-page\"> Welcome to My Page
                                  </span>
                            <p class=\"mt20\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>


                        <div class=\"hexagon-menu clear\">
                            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 22
            echo "                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product", ["id" => twig_get_attribute($this->env, $this->source, $context["i"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            echo "\"  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-universal-access\"></i>
                                                </span>
                                              <span class=\"title\"> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["i"], "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                        </div>

                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8\">
                       <div class=\"hexagon-menu clear\">
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-universal-access\"></i>
                                                </span>
                                                <span class=\"title\">Souris</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-bullseye\"></i>
                                                </span>
                                                <span class=\"title\">Ecran</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-braille\"></i>
                                                </span>
                                                <span class=\"title\">Clavier</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>

                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-life-ring\"></i>
                                                </span>
                                                <span class=\"title\">Baffle</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-id-badge\"></i>
                                                </span>
                                                <span class=\"title\">Camera</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-id-badge\"></i>
                                                </span>
                                                <span class=\"title\">Casque</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-clipboard\"></i>
                                                </span>
                                                <span class=\"title\">Flash USB</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-map-signs\"></i>
                                                </span>
                                                <span class=\"title\">Micro</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-map-signs\"></i>
                                                </span>
                                                <span class=\"title\">Imprimante</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<br><br>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "menu/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 44,  92 => 38,  84 => 33,  71 => 22,  67 => 21,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">

<main class=\"site-wrapper\">
    <div class=\"pt-table desktop-768\">
        <div class=\"pt-tablecell page-home relative\" style=\"background-image: url(https://images.unsplash.com/photo-1486870591958-9b9d0d1dda99?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1500&q=80);
    background-position: center;
    background-size: cover;\">
            <div class=\"overlay\"></div>

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8\">
                        <div class=\"page-title  home text-center\">
                                  <span class=\"heading-page\"> Welcome to My Page
                                  </span>
                            <p class=\"mt20\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>


                        <div class=\"hexagon-menu clear\">
                            {% for i in category %}
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a href=\"{{ path('product',{'id':i.id}) }}\"  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-universal-access\"></i>
                                                </span>
                                              <span class=\"title\"> {{ i.name }}</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            {% endfor %}
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8\">
                       <div class=\"hexagon-menu clear\">
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-universal-access\"></i>
                                                </span>
                                                <span class=\"title\">Souris</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-bullseye\"></i>
                                                </span>
                                                <span class=\"title\">Ecran</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-braille\"></i>
                                                </span>
                                                <span class=\"title\">Clavier</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>

                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-life-ring\"></i>
                                                </span>
                                                <span class=\"title\">Baffle</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-id-badge\"></i>
                                                </span>
                                                <span class=\"title\">Camera</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-id-badge\"></i>
                                                </span>
                                                <span class=\"title\">Casque</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-clipboard\"></i>
                                                </span>
                                                <span class=\"title\">Flash USB</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-map-signs\"></i>
                                                </span>
                                                <span class=\"title\">Micro</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                            <div class=\"hexagon-item\">
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <div class=\"hex-item\">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                                <a  class=\"hex-content\">
                                            <span class=\"hex-content-inner\">
                                                <span class=\"icon\">
                                                    <i class=\"fa fa-map-signs\"></i>
                                                </span>
                                                <span class=\"title\">Imprimante</span>
                                            </span>
                                    <svg viewBox=\"0 0 173.20508075688772 200\" height=\"200\" width=\"174\" version=\"1.1\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z\" fill=\"#1e2530\"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<br><br>
", "menu/menu.html.twig", "C:\\xampp\\htdocs\\ext\\templates\\menu\\menu.html.twig");
    }
}
