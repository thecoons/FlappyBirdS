<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_5749442d70a38a4f5bb4f5b8bdcc238ec06a81adcb948aaaee07244aebb3de74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_352ed61a3168db7f3e6bbeb04f46a4d0934b52ac008588d2175d62e62eb53921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_352ed61a3168db7f3e6bbeb04f46a4d0934b52ac008588d2175d62e62eb53921->enter($__internal_352ed61a3168db7f3e6bbeb04f46a4d0934b52ac008588d2175d62e62eb53921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_352ed61a3168db7f3e6bbeb04f46a4d0934b52ac008588d2175d62e62eb53921->leave($__internal_352ed61a3168db7f3e6bbeb04f46a4d0934b52ac008588d2175d62e62eb53921_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fa78bc36d745e0409d7e28dad1229ca41c32dc43fcae0a316780281c7ef4210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa78bc36d745e0409d7e28dad1229ca41c32dc43fcae0a316780281c7ef4210->enter($__internal_4fa78bc36d745e0409d7e28dad1229ca41c32dc43fcae0a316780281c7ef4210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_4fa78bc36d745e0409d7e28dad1229ca41c32dc43fcae0a316780281c7ef4210->leave($__internal_4fa78bc36d745e0409d7e28dad1229ca41c32dc43fcae0a316780281c7ef4210_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/home/thecoon/M2-DECOL/SeriousGame/framework-standard-edition/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
