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

/* login/index.html.twig */
class __TwigTemplate_549d4f819e9d9875c49bf0228e85cac9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login/index.html.twig"));

        $this->parent = $this->loadTemplate("home.html.twig", "login/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "S'identifier | V.Parrot";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    .login {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
    }
    
    .connect__img {
        width: 50%;
        height: 100%;
        object-fit: cover;
    }
    
    .content__form {
        width: 50%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    
    .connect-logo {
        width: 50%;
        margin-bottom: 2rem;
    }
    
    .form-group {
        width: 100%;
        margin-bottom: 1rem;
    }
    
    .form-group input {
        width: 100%;
        padding: 1rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
    }
    
    .form-group input:focus {
        border: 1px solid #000;
    }
    
    .connect__btn {
        width: 100%;
        padding: 1rem;
        border: none;
        border-radius: 5px;
        background-color: #000;
        color: #fff;
        font-weight: bold;
        cursor: pointer;
    }
    
    .connect__btn:hover {
        background-color: #fff;
        color: #000;
    }
    
    @media (max-width: 768px) {
        .container {
        flex-direction: column;
        }
    
        .connect__img {
        width: 100%;
        height: 50%;
        }
    
        .content__form {
        width: 100%;
        height: 50%;
        }
    }
</style>

<div className=\"container\">
      <h1>S'identifier</h1>
      <section className=\"login\">
        <img className=\"connect__img\" src={connectImg} alt=\"logo\" />
        <div className=\"content__form\">
          <img className=\"connect-logo\" src={logo} alt=\"logo\" />
          <form>
            <div className=\"form-group\">
              <input
                type=\"email\"
                name=\"email\"
                id=\"email\"
                placeholder=\"Email\"
                required
              />
            </div>
            <div className=\"form-group\">
              <input
                type=\"password\"
                name=\"password\"
                id=\"password\"
                placeholder=\"Mot de passe\"
                required
              />
            </div>
            <div className=\"form-group\">
              <button className=\"connect__btn\" type=\"submit\">
                S'identifier
              </button>
            </div>
          </form>
        </div>
      </section>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "login/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'home.html.twig' %}

{% block title %}S'identifier | V.Parrot{% endblock %}

{% block body %}
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    
    .login {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
    }
    
    .connect__img {
        width: 50%;
        height: 100%;
        object-fit: cover;
    }
    
    .content__form {
        width: 50%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    
    .connect-logo {
        width: 50%;
        margin-bottom: 2rem;
    }
    
    .form-group {
        width: 100%;
        margin-bottom: 1rem;
    }
    
    .form-group input {
        width: 100%;
        padding: 1rem;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
    }
    
    .form-group input:focus {
        border: 1px solid #000;
    }
    
    .connect__btn {
        width: 100%;
        padding: 1rem;
        border: none;
        border-radius: 5px;
        background-color: #000;
        color: #fff;
        font-weight: bold;
        cursor: pointer;
    }
    
    .connect__btn:hover {
        background-color: #fff;
        color: #000;
    }
    
    @media (max-width: 768px) {
        .container {
        flex-direction: column;
        }
    
        .connect__img {
        width: 100%;
        height: 50%;
        }
    
        .content__form {
        width: 100%;
        height: 50%;
        }
    }
</style>

<div className=\"container\">
      <h1>S'identifier</h1>
      <section className=\"login\">
        <img className=\"connect__img\" src={connectImg} alt=\"logo\" />
        <div className=\"content__form\">
          <img className=\"connect-logo\" src={logo} alt=\"logo\" />
          <form>
            <div className=\"form-group\">
              <input
                type=\"email\"
                name=\"email\"
                id=\"email\"
                placeholder=\"Email\"
                required
              />
            </div>
            <div className=\"form-group\">
              <input
                type=\"password\"
                name=\"password\"
                id=\"password\"
                placeholder=\"Mot de passe\"
                required
              />
            </div>
            <div className=\"form-group\">
              <button className=\"connect__btn\" type=\"submit\">
                S'identifier
              </button>
            </div>
          </form>
        </div>
      </section>
    </div>
{% endblock %}
", "login/index.html.twig", "/Users/anthonymerguin/Documents/projet/vparrotsymf/vparrotsymf/templates/login/index.html.twig");
    }
}
