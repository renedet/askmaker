<?php

/* base.html.twig */
class __TwigTemplate_2619bd80781aea69a550ba71786c6a40d05fef4133fda19427722f8be32e82d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ef5f8245b9a2b91204bce9f99586b97adc6bbb21d73c0046d13bff1755da563 = $this->env->getExtension("native_profiler");
        $__internal_2ef5f8245b9a2b91204bce9f99586b97adc6bbb21d73c0046d13bff1755da563->enter($__internal_2ef5f8245b9a2b91204bce9f99586b97adc6bbb21d73c0046d13bff1755da563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2ef5f8245b9a2b91204bce9f99586b97adc6bbb21d73c0046d13bff1755da563->leave($__internal_2ef5f8245b9a2b91204bce9f99586b97adc6bbb21d73c0046d13bff1755da563_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3fbdc6f0007a4720447408ce32b6bd1d68441b0fd83c58714b989ba984f9287 = $this->env->getExtension("native_profiler");
        $__internal_b3fbdc6f0007a4720447408ce32b6bd1d68441b0fd83c58714b989ba984f9287->enter($__internal_b3fbdc6f0007a4720447408ce32b6bd1d68441b0fd83c58714b989ba984f9287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b3fbdc6f0007a4720447408ce32b6bd1d68441b0fd83c58714b989ba984f9287->leave($__internal_b3fbdc6f0007a4720447408ce32b6bd1d68441b0fd83c58714b989ba984f9287_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ae4b8f960901a42e857accd8a1587fe6364b7d84b8cc6b0868454fccff060777 = $this->env->getExtension("native_profiler");
        $__internal_ae4b8f960901a42e857accd8a1587fe6364b7d84b8cc6b0868454fccff060777->enter($__internal_ae4b8f960901a42e857accd8a1587fe6364b7d84b8cc6b0868454fccff060777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ae4b8f960901a42e857accd8a1587fe6364b7d84b8cc6b0868454fccff060777->leave($__internal_ae4b8f960901a42e857accd8a1587fe6364b7d84b8cc6b0868454fccff060777_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7620af3f501dc8a943e3adf6a3589eab5b3f05ecf34cea8a95546e1117c0d9d7 = $this->env->getExtension("native_profiler");
        $__internal_7620af3f501dc8a943e3adf6a3589eab5b3f05ecf34cea8a95546e1117c0d9d7->enter($__internal_7620af3f501dc8a943e3adf6a3589eab5b3f05ecf34cea8a95546e1117c0d9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7620af3f501dc8a943e3adf6a3589eab5b3f05ecf34cea8a95546e1117c0d9d7->leave($__internal_7620af3f501dc8a943e3adf6a3589eab5b3f05ecf34cea8a95546e1117c0d9d7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad843036289b1d531a4775dbe35712f5bdec81c9be778314c9b727b437eade06 = $this->env->getExtension("native_profiler");
        $__internal_ad843036289b1d531a4775dbe35712f5bdec81c9be778314c9b727b437eade06->enter($__internal_ad843036289b1d531a4775dbe35712f5bdec81c9be778314c9b727b437eade06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ad843036289b1d531a4775dbe35712f5bdec81c9be778314c9b727b437eade06->leave($__internal_ad843036289b1d531a4775dbe35712f5bdec81c9be778314c9b727b437eade06_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
