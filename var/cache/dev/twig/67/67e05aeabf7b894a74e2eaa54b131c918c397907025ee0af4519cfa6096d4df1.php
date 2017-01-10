<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_c8ccbe24afbcd57cf26452d2766fa45f48aee0e24c83fad9bcefe6bba98dc333 extends Twig_Template
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
        $__internal_33f01329b794406f1dee9e0aad55e08f6966e0553c69829e90834c66073f6adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f01329b794406f1dee9e0aad55e08f6966e0553c69829e90834c66073f6adb->enter($__internal_33f01329b794406f1dee9e0aad55e08f6966e0553c69829e90834c66073f6adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<div class=\"section\">
  <div class=\"container\">
    ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
        <div class=\"input-field\">
          ";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("id" => "username", "class" => "validate")));
        echo "
          <label for=\"username\">Utilisateur</label>
        </div>
        <div class=\"input-field\">
          ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("id" => "email", "class" => "validate")));
        echo "
          <label for=\"email\">Email</label>
        </div>
        <div class=\"input-field\">
          ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("id" => "plainPassword", "class" => "validate")));
        echo "
          <label for=\"plainPassword\">Mot de passe</label>
        </div>
        <div class=\"input-field\">
          ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("id" => "plainPasswordConf", "class" => "validate")));
        echo "
          <label for=\"plainPasswordConf\">Mot de passe Confirmation</label>
        </div>
        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
        <div>
            <input type=\"submit\" class=\"btn\" value=\"Inscrivez-vous\" />
        </div>
    ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
  </div>
</div>
";
        
        $__internal_33f01329b794406f1dee9e0aad55e08f6966e0553c69829e90834c66073f6adb->leave($__internal_33f01329b794406f1dee9e0aad55e08f6966e0553c69829e90834c66073f6adb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 25,  58 => 21,  52 => 18,  45 => 14,  38 => 10,  31 => 6,  26 => 4,  22 => 2,);
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
<div class=\"section\">
  <div class=\"container\">
    {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
        <div class=\"input-field\">
          {{ form_widget(form.username,{'attr':{'id':'username','class':'validate'}})}}
          <label for=\"username\">Utilisateur</label>
        </div>
        <div class=\"input-field\">
          {{ form_widget(form.email,{'attr':{'id':'email','class':'validate'}})}}
          <label for=\"email\">Email</label>
        </div>
        <div class=\"input-field\">
          {{ form_widget(form.plainPassword.first,{'attr':{'id':'plainPassword','class':'validate'}})}}
          <label for=\"plainPassword\">Mot de passe</label>
        </div>
        <div class=\"input-field\">
          {{ form_widget(form.plainPassword.second,{'attr':{'id':'plainPasswordConf','class':'validate'}})}}
          <label for=\"plainPasswordConf\">Mot de passe Confirmation</label>
        </div>
        {{ form_widget(form) }}
        <div>
            <input type=\"submit\" class=\"btn\" value=\"Inscrivez-vous\" />
        </div>
    {{ form_end(form) }}
  </div>
</div>
", "FOSUserBundle:Registration:register_content.html.twig", "/home/thecoon/M2-DECOL/SeriousGame/framework-standard-edition/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
