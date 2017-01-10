<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_f33af8f1a4f5e5f40870c447aba2e4b2e301c411d2cd6635c8372ac8f376ac5e extends Twig_Template
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
        $__internal_197e9e33a950beca7c0c5ea92555201a7a7e810e4a9f75b106df0c49f14e40f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197e9e33a950beca7c0c5ea92555201a7a7e810e4a9f75b106df0c49f14e40f1->enter($__internal_197e9e33a950beca7c0c5ea92555201a7a7e810e4a9f75b106df0c49f14e40f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 4
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 6
        echo "<div class=\"section\">
  <div class=\"container\">
    <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        ";
        // line 9
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 10
            echo "            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
        ";
        }
        // line 12
        echo "
        <div class=\"input-field\">
          <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"validate\"/>
          <label for=\"username\">Username</label>
        </div>

        <div class=\"input-field\">
          <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"validate\"/>
          <label for=\"password\">Mot de passe</label>
        </div>

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">Ne m'oublie pas</label>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn right\"value=\"Connexion\" />
    </form>
  </div>
</div>
";
        
        $__internal_197e9e33a950beca7c0c5ea92555201a7a7e810e4a9f75b106df0c49f14e40f1->leave($__internal_197e9e33a950beca7c0c5ea92555201a7a7e810e4a9f75b106df0c49f14e40f1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  49 => 12,  43 => 10,  41 => 9,  37 => 8,  33 => 6,  27 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}
<div class=\"section\">
  <div class=\"container\">
    <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
        {% if csrf_token %}
            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
        {% endif %}

        <div class=\"input-field\">
          <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" class=\"validate\"/>
          <label for=\"username\">Username</label>
        </div>

        <div class=\"input-field\">
          <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"validate\"/>
          <label for=\"password\">Mot de passe</label>
        </div>

        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">Ne m'oublie pas</label>

        <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn right\"value=\"Connexion\" />
    </form>
  </div>
</div>
", "FOSUserBundle:Security:login_content.html.twig", "/home/thecoon/M2-DECOL/SeriousGame/framework-standard-edition/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
