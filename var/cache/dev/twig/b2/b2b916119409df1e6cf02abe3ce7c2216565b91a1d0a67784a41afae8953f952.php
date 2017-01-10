<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_037fabcafe78617ca588c62f914a0c06ec9d32d7fdc6eef06c8248ac102f3bef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f65399c1c46b5808ea42fcc008b810a64017250cc3759ad26997e31a01713665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65399c1c46b5808ea42fcc008b810a64017250cc3759ad26997e31a01713665->enter($__internal_f65399c1c46b5808ea42fcc008b810a64017250cc3759ad26997e31a01713665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f65399c1c46b5808ea42fcc008b810a64017250cc3759ad26997e31a01713665->leave($__internal_f65399c1c46b5808ea42fcc008b810a64017250cc3759ad26997e31a01713665_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1cf404dc6c81cd5f2d33c04eea6c7be806a8fa2f79116e0fd491657b8acb30ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf404dc6c81cd5f2d33c04eea6c7be806a8fa2f79116e0fd491657b8acb30ed->enter($__internal_1cf404dc6c81cd5f2d33c04eea6c7be806a8fa2f79116e0fd491657b8acb30ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_1cf404dc6c81cd5f2d33c04eea6c7be806a8fa2f79116e0fd491657b8acb30ed->leave($__internal_1cf404dc6c81cd5f2d33c04eea6c7be806a8fa2f79116e0fd491657b8acb30ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"FOSUserBundle:Registration:register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/thecoon/M2-DECOL/SeriousGame/framework-standard-edition/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
