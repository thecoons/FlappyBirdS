<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_533d718030a9d1d1c6207a248a762e5c7d3dd107ce3362960b6f2ed58cc992ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcd9d29947eba8085b9bd3c3590c6e1e29f980728cabe4fd4f1d09334e62b7ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd9d29947eba8085b9bd3c3590c6e1e29f980728cabe4fd4f1d09334e62b7ad->enter($__internal_dcd9d29947eba8085b9bd3c3590c6e1e29f980728cabe4fd4f1d09334e62b7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcd9d29947eba8085b9bd3c3590c6e1e29f980728cabe4fd4f1d09334e62b7ad->leave($__internal_dcd9d29947eba8085b9bd3c3590c6e1e29f980728cabe4fd4f1d09334e62b7ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cea30fb07b18236dd5d2209ae5df0abfe42c598a3973dedb9436cb60295e35d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea30fb07b18236dd5d2209ae5df0abfe42c598a3973dedb9436cb60295e35d6->enter($__internal_cea30fb07b18236dd5d2209ae5df0abfe42c598a3973dedb9436cb60295e35d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cea30fb07b18236dd5d2209ae5df0abfe42c598a3973dedb9436cb60295e35d6->leave($__internal_cea30fb07b18236dd5d2209ae5df0abfe42c598a3973dedb9436cb60295e35d6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_86d8cbd96a40ac252a905ae78cbbe3934e7b71b4598231a98c1e79989a54497a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86d8cbd96a40ac252a905ae78cbbe3934e7b71b4598231a98c1e79989a54497a->enter($__internal_86d8cbd96a40ac252a905ae78cbbe3934e7b71b4598231a98c1e79989a54497a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_86d8cbd96a40ac252a905ae78cbbe3934e7b71b4598231a98c1e79989a54497a->leave($__internal_86d8cbd96a40ac252a905ae78cbbe3934e7b71b4598231a98c1e79989a54497a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7cfc325599f075a1fb3ddc690624633d77cda2d3f1d52704b92b18051bdcb793 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfc325599f075a1fb3ddc690624633d77cda2d3f1d52704b92b18051bdcb793->enter($__internal_7cfc325599f075a1fb3ddc690624633d77cda2d3f1d52704b92b18051bdcb793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7cfc325599f075a1fb3ddc690624633d77cda2d3f1d52704b92b18051bdcb793->leave($__internal_7cfc325599f075a1fb3ddc690624633d77cda2d3f1d52704b92b18051bdcb793_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/thecoon/M2-DECOL/SeriousGame/framework-standard-edition/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
