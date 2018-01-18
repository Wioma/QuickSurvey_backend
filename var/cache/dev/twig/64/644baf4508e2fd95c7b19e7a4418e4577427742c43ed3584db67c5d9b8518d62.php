<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_eb52530bedb7366b38cecea1a4c0a67997ca88cf61704d8fc924ac40c0effce3 extends Twig_Template
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
        $__internal_0ebb1379d849f9806cf205aadea42dfe9e45f9756b118a04c34f0716cadad549 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ebb1379d849f9806cf205aadea42dfe9e45f9756b118a04c34f0716cadad549->enter($__internal_0ebb1379d849f9806cf205aadea42dfe9e45f9756b118a04c34f0716cadad549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e2429ccb91c6c85f0f059a75c5326bc36442a325b5c33da92a793a504dff7950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2429ccb91c6c85f0f059a75c5326bc36442a325b5c33da92a793a504dff7950->enter($__internal_e2429ccb91c6c85f0f059a75c5326bc36442a325b5c33da92a793a504dff7950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0ebb1379d849f9806cf205aadea42dfe9e45f9756b118a04c34f0716cadad549->leave($__internal_0ebb1379d849f9806cf205aadea42dfe9e45f9756b118a04c34f0716cadad549_prof);

        
        $__internal_e2429ccb91c6c85f0f059a75c5326bc36442a325b5c33da92a793a504dff7950->leave($__internal_e2429ccb91c6c85f0f059a75c5326bc36442a325b5c33da92a793a504dff7950_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
