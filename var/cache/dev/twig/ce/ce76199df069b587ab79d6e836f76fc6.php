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

/* components/Header.php */
class __TwigTemplate_f8a2471e977beea266ad152f73c79f1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Header.php"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/Header.php"));

        // line 1
        echo "<header>
  <style>
    .header-content {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      align-items: center;
      padding: 0 20px;
    }

    .header-img {
      width: 200px;
      justify-self: center;
    }

    a {
      width: 150px;
      text-align: center;
      justify-self: end;
    }
  </style>
  <div class=\"header-content\">
    <h1>Garage Vincent Parrot</h1>
    <img class=\"header-img\" src=\"assets/img/Logo.svg\" alt=\"logo\">
    <a href=\"/templates/login/login.html.twig\">S'identifier</a>
  </div>
</header>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "components/Header.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header>
  <style>
    .header-content {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      align-items: center;
      padding: 0 20px;
    }

    .header-img {
      width: 200px;
      justify-self: center;
    }

    a {
      width: 150px;
      text-align: center;
      justify-self: end;
    }
  </style>
  <div class=\"header-content\">
    <h1>Garage Vincent Parrot</h1>
    <img class=\"header-img\" src=\"assets/img/Logo.svg\" alt=\"logo\">
    <a href=\"/templates/login/login.html.twig\">S'identifier</a>
  </div>
</header>", "components/Header.php", "/Users/anthonymerguin/Documents/projet/vparrotsymf/vparrotsymf/templates/components/Header.php");
    }
}
