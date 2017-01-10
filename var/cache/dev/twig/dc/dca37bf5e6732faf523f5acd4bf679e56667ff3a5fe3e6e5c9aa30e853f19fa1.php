<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cae6be511831e59a35da00aa8681ac86e1e97c7ed52d96cb80992b7de1c88c38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d241b45182fd9f62b102cd05690fc386a26652d5f8f6b227697d4489d1375a5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d241b45182fd9f62b102cd05690fc386a26652d5f8f6b227697d4489d1375a5a->enter($__internal_d241b45182fd9f62b102cd05690fc386a26652d5f8f6b227697d4489d1375a5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d241b45182fd9f62b102cd05690fc386a26652d5f8f6b227697d4489d1375a5a->leave($__internal_d241b45182fd9f62b102cd05690fc386a26652d5f8f6b227697d4489d1375a5a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_025a81f16430999b1f858a1a7111f877dea3c4fec44ed92ff11b5cbc67caabd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_025a81f16430999b1f858a1a7111f877dea3c4fec44ed92ff11b5cbc67caabd2->enter($__internal_025a81f16430999b1f858a1a7111f877dea3c4fec44ed92ff11b5cbc67caabd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_025a81f16430999b1f858a1a7111f877dea3c4fec44ed92ff11b5cbc67caabd2->leave($__internal_025a81f16430999b1f858a1a7111f877dea3c4fec44ed92ff11b5cbc67caabd2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9ecb3c05774f2c94e958eb1c6cf0c1c1a1c2bfc61a6b81cda268a0085d0b508a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecb3c05774f2c94e958eb1c6cf0c1c1a1c2bfc61a6b81cda268a0085d0b508a->enter($__internal_9ecb3c05774f2c94e958eb1c6cf0c1c1a1c2bfc61a6b81cda268a0085d0b508a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9ecb3c05774f2c94e958eb1c6cf0c1c1a1c2bfc61a6b81cda268a0085d0b508a->leave($__internal_9ecb3c05774f2c94e958eb1c6cf0c1c1a1c2bfc61a6b81cda268a0085d0b508a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_64db4a5b8b640c3ec92872e57df5e2d7105ee37646c865ef84f8adeb32d8a00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64db4a5b8b640c3ec92872e57df5e2d7105ee37646c865ef84f8adeb32d8a00e->enter($__internal_64db4a5b8b640c3ec92872e57df5e2d7105ee37646c865ef84f8adeb32d8a00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_64db4a5b8b640c3ec92872e57df5e2d7105ee37646c865ef84f8adeb32d8a00e->leave($__internal_64db4a5b8b640c3ec92872e57df5e2d7105ee37646c865ef84f8adeb32d8a00e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/thecoon/M2-DECOL/SeriousGame/framework-standard-edition/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
