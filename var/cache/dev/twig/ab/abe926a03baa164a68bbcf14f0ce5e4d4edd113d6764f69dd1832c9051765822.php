<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b2d36c2cce6f848a0328c57f1375cee532b9d362b973c7fa396abdf8306fc005 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12098ca58aa26d2b1cb757a239f4eedd561feaf1d9441f8bdab30f7e5d145390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12098ca58aa26d2b1cb757a239f4eedd561feaf1d9441f8bdab30f7e5d145390->enter($__internal_12098ca58aa26d2b1cb757a239f4eedd561feaf1d9441f8bdab30f7e5d145390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12098ca58aa26d2b1cb757a239f4eedd561feaf1d9441f8bdab30f7e5d145390->leave($__internal_12098ca58aa26d2b1cb757a239f4eedd561feaf1d9441f8bdab30f7e5d145390_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_abb2acd42e69837802ca4b91c208d3bc9774ad45453d353b51e6aafe93203977 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abb2acd42e69837802ca4b91c208d3bc9774ad45453d353b51e6aafe93203977->enter($__internal_abb2acd42e69837802ca4b91c208d3bc9774ad45453d353b51e6aafe93203977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Learning Game(s) Login";
        
        $__internal_abb2acd42e69837802ca4b91c208d3bc9774ad45453d353b51e6aafe93203977->leave($__internal_abb2acd42e69837802ca4b91c208d3bc9774ad45453d353b51e6aafe93203977_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_692f17a382403b52ca5f2f55213eb110453d23e8639fde57e4238bc94ed30cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_692f17a382403b52ca5f2f55213eb110453d23e8639fde57e4238bc94ed30cf9->enter($__internal_692f17a382403b52ca5f2f55213eb110453d23e8639fde57e4238bc94ed30cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_692f17a382403b52ca5f2f55213eb110453d23e8639fde57e4238bc94ed30cf9->leave($__internal_692f17a382403b52ca5f2f55213eb110453d23e8639fde57e4238bc94ed30cf9_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a371b539b25deb88cbedfa8bb47e977e1f040c4a44ab6b87e07708a54024205 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a371b539b25deb88cbedfa8bb47e977e1f040c4a44ab6b87e07708a54024205->enter($__internal_9a371b539b25deb88cbedfa8bb47e977e1f040c4a44ab6b87e07708a54024205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_9a371b539b25deb88cbedfa8bb47e977e1f040c4a44ab6b87e07708a54024205->leave($__internal_9a371b539b25deb88cbedfa8bb47e977e1f040c4a44ab6b87e07708a54024205_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Learning Game(s) Login{% endblock %}

{% block body %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}
", "FOSUserBundle::layout.html.twig", "/home/thecoon/M2-DECOL/SeriousGame/framework-standard-edition/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
