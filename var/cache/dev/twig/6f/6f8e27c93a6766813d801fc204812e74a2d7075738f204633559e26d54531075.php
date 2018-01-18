<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_6d48cf312d7d16ef1995d24b65ddc0de95e6dd4d9f38103a2a5a7912d637b901 extends Twig_Template
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
        $__internal_17cf3263d03fea6b61fca9b8f6f92bf3d9f5f5fb985e54cd1df41b7e1cc3e6ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17cf3263d03fea6b61fca9b8f6f92bf3d9f5f5fb985e54cd1df41b7e1cc3e6ff->enter($__internal_17cf3263d03fea6b61fca9b8f6f92bf3d9f5f5fb985e54cd1df41b7e1cc3e6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7c6192e462ee2539ad02800eaf846fe552af0bec7f4e07b148282d58d750e425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c6192e462ee2539ad02800eaf846fe552af0bec7f4e07b148282d58d750e425->enter($__internal_7c6192e462ee2539ad02800eaf846fe552af0bec7f4e07b148282d58d750e425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_17cf3263d03fea6b61fca9b8f6f92bf3d9f5f5fb985e54cd1df41b7e1cc3e6ff->leave($__internal_17cf3263d03fea6b61fca9b8f6f92bf3d9f5f5fb985e54cd1df41b7e1cc3e6ff_prof);

        
        $__internal_7c6192e462ee2539ad02800eaf846fe552af0bec7f4e07b148282d58d750e425->leave($__internal_7c6192e462ee2539ad02800eaf846fe552af0bec7f4e07b148282d58d750e425_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
