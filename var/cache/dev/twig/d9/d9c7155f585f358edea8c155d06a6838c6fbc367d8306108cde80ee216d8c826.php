<?php

/* AppBundle:Bot:get_bot.html.twig */
class __TwigTemplate_bf043a6570f82405a21e2290806230a90cc02d6c733ed94817bdbbfc4e472554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AppBundle:Bot:get_bot.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09aa629d973a5ef8c3ee8e85eb72a766b4455a09b72e9db4813e84f701e40cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09aa629d973a5ef8c3ee8e85eb72a766b4455a09b72e9db4813e84f701e40cbc->enter($__internal_09aa629d973a5ef8c3ee8e85eb72a766b4455a09b72e9db4813e84f701e40cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Bot:get_bot.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09aa629d973a5ef8c3ee8e85eb72a766b4455a09b72e9db4813e84f701e40cbc->leave($__internal_09aa629d973a5ef8c3ee8e85eb72a766b4455a09b72e9db4813e84f701e40cbc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c05200aee22522ac57dbf6333bacf33ca55fa67ad907c39cffdbdedbb6f04cde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c05200aee22522ac57dbf6333bacf33ca55fa67ad907c39cffdbdedbb6f04cde->enter($__internal_c05200aee22522ac57dbf6333bacf33ca55fa67ad907c39cffdbdedbb6f04cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "AppBundle:Bot:getBot";
        
        $__internal_c05200aee22522ac57dbf6333bacf33ca55fa67ad907c39cffdbdedbb6f04cde->leave($__internal_c05200aee22522ac57dbf6333bacf33ca55fa67ad907c39cffdbdedbb6f04cde_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b767a2c9e1df7a93c8cccd6509315276647d166fc74ffb9d119ea07e6a95465 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b767a2c9e1df7a93c8cccd6509315276647d166fc74ffb9d119ea07e6a95465->enter($__internal_6b767a2c9e1df7a93c8cccd6509315276647d166fc74ffb9d119ea07e6a95465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the Bot:getBot page</h1>
";
        
        $__internal_6b767a2c9e1df7a93c8cccd6509315276647d166fc74ffb9d119ea07e6a95465->leave($__internal_6b767a2c9e1df7a93c8cccd6509315276647d166fc74ffb9d119ea07e6a95465_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Bot:get_bot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}AppBundle:Bot:getBot{% endblock %}

{% block body %}
<h1>Welcome to the Bot:getBot page</h1>
{% endblock %}
", "AppBundle:Bot:get_bot.html.twig", "/home/thecoon/M2-DECOL/SeriousGame/framework-standard-edition/src/AppBundle/Resources/views/Bot/get_bot.html.twig");
    }
}
