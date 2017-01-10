<?php

/* ::base.html.twig */
class __TwigTemplate_76729eab6d718aaf7896e5b9cc96366df2f0d50ad951ea9b31be75cc7d7b4c7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3fcaf74f7d89f856f2be1ace7ff79fe96a6deffdea2933b93295f400e4e0a8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fcaf74f7d89f856f2be1ace7ff79fe96a6deffdea2933b93295f400e4e0a8a1->enter($__internal_3fcaf74f7d89f856f2be1ace7ff79fe96a6deffdea2933b93295f400e4e0a8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0\"/>
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  <!-- CSS  -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/materialize/dist/css/materialize.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
</head>
<body>

";
        // line 14
        if (($this->getAttribute(($context["user"] ?? null), "username", array(), "any", true, true) &&  !null)) {
            // line 15
            echo "      ";
            $this->loadTemplate("AppBundle:Neuroevol:side-nav.html.twig", "::base.html.twig", 15)->display($context);
            // line 16
            echo "      ";
        }
        // line 17
        echo "      ";
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "      ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
        
        $__internal_3fcaf74f7d89f856f2be1ace7ff79fe96a6deffdea2933b93295f400e4e0a8a1->leave($__internal_3fcaf74f7d89f856f2be1ace7ff79fe96a6deffdea2933b93295f400e4e0a8a1_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c08c206ad66553e7145cbc9374dc3fb9b5cee2a31fb9e4a7a981e0fb8a7a5a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08c206ad66553e7145cbc9374dc3fb9b5cee2a31fb9e4a7a981e0fb8a7a5a3c->enter($__internal_c08c206ad66553e7145cbc9374dc3fb9b5cee2a31fb9e4a7a981e0fb8a7a5a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LearningGame";
        
        $__internal_c08c206ad66553e7145cbc9374dc3fb9b5cee2a31fb9e4a7a981e0fb8a7a5a3c->leave($__internal_c08c206ad66553e7145cbc9374dc3fb9b5cee2a31fb9e4a7a981e0fb8a7a5a3c_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_f550952391396e4a72483d6cabb2404e550cd60caf896c378a369204af458964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f550952391396e4a72483d6cabb2404e550cd60caf896c378a369204af458964->enter($__internal_f550952391396e4a72483d6cabb2404e550cd60caf896c378a369204af458964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f550952391396e4a72483d6cabb2404e550cd60caf896c378a369204af458964->leave($__internal_f550952391396e4a72483d6cabb2404e550cd60caf896c378a369204af458964_prof);

    }

    // line 18
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1ebf11496599cce080c7bcd3165813763a06a3444a31ef50d49fdf920205ab2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ebf11496599cce080c7bcd3165813763a06a3444a31ef50d49fdf920205ab2b->enter($__internal_1ebf11496599cce080c7bcd3165813763a06a3444a31ef50d49fdf920205ab2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 19
        echo "      <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
      <script src=\"https://unpkg.com/lodash@4.13.1/lodash.min.js\"></script>
      <script src=\"https://unpkg.com/axios@0.12.0/dist/axios.min.js\"></script>
      <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/materialize/dist/js/materialize.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vue_src/option.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/chart.js/dist/Chart.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/vue/dist/vue.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("flappylearning/game.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("flappylearning/Neuroevolution.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vue_src/param_chart.js"), "html", null, true);
        echo "\"></script
      // <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vue_src/component.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vue_src/app.js"), "html", null, true);
        echo "\"></script>
      ";
        
        $__internal_1ebf11496599cce080c7bcd3165813763a06a3444a31ef50d49fdf920205ab2b->leave($__internal_1ebf11496599cce080c7bcd3165813763a06a3444a31ef50d49fdf920205ab2b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 30,  131 => 29,  127 => 28,  123 => 27,  119 => 26,  115 => 25,  111 => 24,  107 => 23,  103 => 22,  98 => 19,  92 => 18,  81 => 17,  69 => 6,  60 => 32,  57 => 18,  54 => 17,  51 => 16,  48 => 15,  46 => 14,  39 => 10,  32 => 6,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1.0\"/>
  <title>{% block title %}LearningGame{% endblock %}</title>

  <!-- CSS  -->
  <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
  <link href=\"{{asset('assets/vendor/materialize/dist/css/materialize.css')}}\" type=\"text/css\" rel=\"stylesheet\" media=\"screen,projection\"/>
</head>
<body>

{% if user.username is defined and not null %}
      {% include 'AppBundle:Neuroevol:side-nav.html.twig' %}
      {% endif %}
      {% block body %}{% endblock %}
      {% block javascript %}
      <script src=\"https://code.jquery.com/jquery-2.1.1.min.js\"></script>
      <script src=\"https://unpkg.com/lodash@4.13.1/lodash.min.js\"></script>
      <script src=\"https://unpkg.com/axios@0.12.0/dist/axios.min.js\"></script>
      <script src=\"{{asset('assets/vendor/materialize/dist/js/materialize.js')}}\"></script>
      <script src=\"{{asset('vue_src/option.js')}}\"></script>
      <script src=\"{{asset('assets/vendor/chart.js/dist/Chart.js')}}\"></script>
      <script src=\"{{asset('assets/vendor/vue/dist/vue.js')}}\"></script>
      <script src=\"{{asset('flappylearning/game.js')}}\"></script>
      <script src=\"{{asset('flappylearning/Neuroevolution.js')}}\"></script>
      <script src=\"{{asset('vue_src/param_chart.js')}}\"></script
      // <script src=\"{{asset('vue_src/component.js')}}\"></script>
      <script src=\"{{asset('vue_src/app.js')}}\"></script>
      {% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/thecoon/M2-DECOL/SeriousGame/framework-standard-edition/app/Resources/views/base.html.twig");
    }
}
