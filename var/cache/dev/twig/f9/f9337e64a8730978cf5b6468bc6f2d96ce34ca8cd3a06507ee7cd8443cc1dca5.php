<?php

/* AppBundle:Todo:index.html.twig */
class __TwigTemplate_361b43b45309b10daec624458ec88544f7b8fb29ee423feff33c3d061c7a108d extends Twig_Template
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
        $__internal_bdae8cda4605e7f958ac70a0604cd821db23c5a40d444628cf28868fef3a92f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdae8cda4605e7f958ac70a0604cd821db23c5a40d444628cf28868fef3a92f9->enter($__internal_bdae8cda4605e7f958ac70a0604cd821db23c5a40d444628cf28868fef3a92f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Todo:index.html.twig"));

        // line 1
        echo "<!doctype html>
<html data-framework=\"vue\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>Vue.js • TodoMVC</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("node_modules/todomvc-common/base.css"), "html", null, true);
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("node_modules/todomvc-app-css/index.css"), "html", null, true);
        echo "\">
\t\t<style> [v-cloak] { display: none; } </style>
\t</head>
\t<body>
\t\t<section class=\"todoapp\">
\t\t\t<header class=\"header\">
\t\t\t\t<h1>todos</h1>
\t\t\t\t<input class=\"new-todo\" autofocus autocomplete=\"off\" placeholder=\"What needs to be done?\" v-model=\"newTodo\" @keyup.enter=\"addTodo\">
\t\t\t</header>
\t\t\t<section class=\"main\" v-show=\"todos.length\" v-cloak>
\t\t\t\t<input class=\"toggle-all\" type=\"checkbox\" v-model=\"allDone\">
\t\t\t\t<ul class=\"todo-list\">
\t\t\t\t\t<li class=\"todo\" v-for=\"todo in filteredTodos\" :class=\"{completed: todo.completed, editing: todo == editedTodo}\">
\t\t\t\t\t\t<div class=\"view\">
\t\t\t\t\t\t\t<input class=\"toggle\" type=\"checkbox\" v-model=\"todo.completed\">
\t\t\t\t\t\t\t<label @dblclick=\"editTodo(todo)\">\${ todo.title }</label>
\t\t\t\t\t\t\t<button class=\"destroy\" @click=\"removeTodo(todo)\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input class=\"edit\" type=\"text\" v-model=\"todo.title\" v-todo-focus=\"todo == editedTodo\" @blur=\"doneEdit(todo)\" @keyup.enter=\"doneEdit(todo)\" @keyup.esc=\"cancelEdit(todo)\">
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</section>
\t\t\t<footer class=\"footer\" v-show=\"todos.length\" v-cloak>
\t\t\t\t<span class=\"todo-count\">
\t\t\t\t\t<strong v-text=\"remaining\"></strong> \${ remaining | pluralize 'item' } left
\t\t\t\t</span>
\t\t\t\t<ul class=\"filters\">
\t\t\t\t\t<li><a href=\"#/all\" :class=\"{selected: visibility == 'all'}\">All</a></li>
\t\t\t\t\t<li><a href=\"#/active\" :class=\"{selected: visibility == 'active'}\">Active</a></li>
\t\t\t\t\t<li><a href=\"#/completed\" :class=\"{selected: visibility == 'completed'}\">Completed</a></li>
\t\t\t\t</ul>
\t\t\t\t<button class=\"clear-completed\" @click=\"removeCompleted\" v-show=\"todos.length > remaining\">
\t\t\t\t\tClear completed
\t\t\t\t</button>
\t\t\t</footer>
\t\t</section>
\t\t<footer class=\"info\">
\t\t\t<p>Double-click to edit a todo</p>
\t\t\t<p>Written by <a href=\"http://evanyou.me\">Evan You</a></p>
\t\t\t<p>Part of <a href=\"http://todomvc.com\">TodoMVC</a></p>
\t\t</footer>
\t\t<script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("node_modules/todomvc-common/base.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("node_modules/director/build/director.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/vue/dist/vue.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/store.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/routes.js"), "html", null, true);
        echo "\"></script>
\t</body>
</html>
";
        
        $__internal_bdae8cda4605e7f958ac70a0604cd821db23c5a40d444628cf28868fef3a92f9->leave($__internal_bdae8cda4605e7f958ac70a0604cd821db23c5a40d444628cf28868fef3a92f9_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Todo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 53,  93 => 52,  89 => 51,  85 => 50,  81 => 49,  77 => 48,  33 => 7,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html data-framework=\"vue\">
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>Vue.js • TodoMVC</title>
\t\t<link rel=\"stylesheet\" href=\"{{asset('node_modules/todomvc-common/base.css')}}\">
\t\t<link rel=\"stylesheet\" href=\"{{asset('node_modules/todomvc-app-css/index.css')}}\">
\t\t<style> [v-cloak] { display: none; } </style>
\t</head>
\t<body>
\t\t<section class=\"todoapp\">
\t\t\t<header class=\"header\">
\t\t\t\t<h1>todos</h1>
\t\t\t\t<input class=\"new-todo\" autofocus autocomplete=\"off\" placeholder=\"What needs to be done?\" v-model=\"newTodo\" @keyup.enter=\"addTodo\">
\t\t\t</header>
\t\t\t<section class=\"main\" v-show=\"todos.length\" v-cloak>
\t\t\t\t<input class=\"toggle-all\" type=\"checkbox\" v-model=\"allDone\">
\t\t\t\t<ul class=\"todo-list\">
\t\t\t\t\t<li class=\"todo\" v-for=\"todo in filteredTodos\" :class=\"{completed: todo.completed, editing: todo == editedTodo}\">
\t\t\t\t\t\t<div class=\"view\">
\t\t\t\t\t\t\t<input class=\"toggle\" type=\"checkbox\" v-model=\"todo.completed\">
\t\t\t\t\t\t\t<label @dblclick=\"editTodo(todo)\">\${ todo.title }</label>
\t\t\t\t\t\t\t<button class=\"destroy\" @click=\"removeTodo(todo)\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input class=\"edit\" type=\"text\" v-model=\"todo.title\" v-todo-focus=\"todo == editedTodo\" @blur=\"doneEdit(todo)\" @keyup.enter=\"doneEdit(todo)\" @keyup.esc=\"cancelEdit(todo)\">
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</section>
\t\t\t<footer class=\"footer\" v-show=\"todos.length\" v-cloak>
\t\t\t\t<span class=\"todo-count\">
\t\t\t\t\t<strong v-text=\"remaining\"></strong> \${ remaining | pluralize 'item' } left
\t\t\t\t</span>
\t\t\t\t<ul class=\"filters\">
\t\t\t\t\t<li><a href=\"#/all\" :class=\"{selected: visibility == 'all'}\">All</a></li>
\t\t\t\t\t<li><a href=\"#/active\" :class=\"{selected: visibility == 'active'}\">Active</a></li>
\t\t\t\t\t<li><a href=\"#/completed\" :class=\"{selected: visibility == 'completed'}\">Completed</a></li>
\t\t\t\t</ul>
\t\t\t\t<button class=\"clear-completed\" @click=\"removeCompleted\" v-show=\"todos.length > remaining\">
\t\t\t\t\tClear completed
\t\t\t\t</button>
\t\t\t</footer>
\t\t</section>
\t\t<footer class=\"info\">
\t\t\t<p>Double-click to edit a todo</p>
\t\t\t<p>Written by <a href=\"http://evanyou.me\">Evan You</a></p>
\t\t\t<p>Part of <a href=\"http://todomvc.com\">TodoMVC</a></p>
\t\t</footer>
\t\t<script src=\"{{asset('node_modules/todomvc-common/base.js')}}\"></script>
\t\t<script src=\"{{asset('node_modules/director/build/director.js')}}\"></script>
\t\t<script src=\"{{asset('assets/vendor/vue/dist/vue.js')}}\"></script>
\t\t<script src=\"{{asset('js/store.js')}}\"></script>
\t\t<script src=\"{{asset('js/app.js')}}\"></script>
\t\t<script src=\"{{asset('js/routes.js')}}\"></script>
\t</body>
</html>
", "AppBundle:Todo:index.html.twig", "/home/thecoon/M2-DECOL/SeriousGame/framework-standard-edition/src/AppBundle/Resources/views/Todo/index.html.twig");
    }
}
