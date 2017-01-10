<?php

/* AppBundle:Neuroevol:side-nav.html.twig */
class __TwigTemplate_5011d84c05cda0e3e970f7e24d222762b17465876dc9bb9e1b600e4557352e97 extends Twig_Template
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
        $__internal_74f335507654933ccb0e3d75b92b8f2cb39d4afb837de8d890f944f62b285d1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f335507654933ccb0e3d75b92b8f2cb39d4afb837de8d890f944f62b285d1c->enter($__internal_74f335507654933ccb0e3d75b92b8f2cb39d4afb837de8d890f944f62b285d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Neuroevol:side-nav.html.twig"));

        // line 1
        echo "<ul id=\"slide-out\" class=\"side-nav\">
    <li><div class=\"userView\">
      <div class=\"background\">
        <img src=\"http://www.starwallpapers.com/walls/fox_animal_minimalism_hd_wallpaper-wide.jpg\" class=\"responsive-img\">
      </div>
      <br>
      <br>
      <a href=\"#!name\"><span class=\"white-text name\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</span></a>
      <br>
      <!-- <a href=\"#!email\"><span class=\"white-text email\">jdandturk@gmail.com</span></a> -->
    </div></li>
    <li><a href=\"\"><i class=\"material-icons\">library_add</i>Add a new FlappyBot</a></li>
    <li><a class=\"subheader\">Vos familles</a></li>
    <li><a href=\"\"><span class=\"elo badge\">1250 elo</span>LesDurands</a></li>
    <li><a href=\"\"><span class=\"elo badge\">1307 elo</span>LesBernards</a></li>
    <li><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\" class=\"black-text\"><i class=\"material-icons\">power_settings_new</i>Logout</a></li>

    <li><div class=\"divider\"></div></li>
  </ul>
";
        
        $__internal_74f335507654933ccb0e3d75b92b8f2cb39d4afb837de8d890f944f62b285d1c->leave($__internal_74f335507654933ccb0e3d75b92b8f2cb39d4afb837de8d890f944f62b285d1c_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Neuroevol:side-nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  31 => 8,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ul id=\"slide-out\" class=\"side-nav\">
    <li><div class=\"userView\">
      <div class=\"background\">
        <img src=\"http://www.starwallpapers.com/walls/fox_animal_minimalism_hd_wallpaper-wide.jpg\" class=\"responsive-img\">
      </div>
      <br>
      <br>
      <a href=\"#!name\"><span class=\"white-text name\">{{ user.username }}</span></a>
      <br>
      <!-- <a href=\"#!email\"><span class=\"white-text email\">jdandturk@gmail.com</span></a> -->
    </div></li>
    <li><a href=\"\"><i class=\"material-icons\">library_add</i>Add a new FlappyBot</a></li>
    <li><a class=\"subheader\">Vos familles</a></li>
    <li><a href=\"\"><span class=\"elo badge\">1250 elo</span>LesDurands</a></li>
    <li><a href=\"\"><span class=\"elo badge\">1307 elo</span>LesBernards</a></li>
    <li><a href=\"{{ path('fos_user_security_logout')}}\" class=\"black-text\"><i class=\"material-icons\">power_settings_new</i>Logout</a></li>

    <li><div class=\"divider\"></div></li>
  </ul>
", "AppBundle:Neuroevol:side-nav.html.twig", "/home/thecoon/M2-DECOL/SeriousGame/framework-standard-edition/src/AppBundle/Resources/views/Neuroevol/side-nav.html.twig");
    }
}
