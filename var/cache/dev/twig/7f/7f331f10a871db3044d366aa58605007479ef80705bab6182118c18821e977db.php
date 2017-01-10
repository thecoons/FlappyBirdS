<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_63b598f3f2beb1e58537735725581ac1d9266a11814636e19ee2dee4bb755faf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b43758af03a56b2d3ee1f4e8486e9d84e105770bd9cc36bff6e9e3a2bd98d014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b43758af03a56b2d3ee1f4e8486e9d84e105770bd9cc36bff6e9e3a2bd98d014->enter($__internal_b43758af03a56b2d3ee1f4e8486e9d84e105770bd9cc36bff6e9e3a2bd98d014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b43758af03a56b2d3ee1f4e8486e9d84e105770bd9cc36bff6e9e3a2bd98d014->leave($__internal_b43758af03a56b2d3ee1f4e8486e9d84e105770bd9cc36bff6e9e3a2bd98d014_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/thecoon/M2-DECOL/SeriousGame/framework-standard-edition/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
