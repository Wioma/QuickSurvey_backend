<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_80ef642a85627284456c4cb5d262c0ee32e9a2b656639b5feff4d7846f252ca0 extends Twig_Template
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
        $__internal_19b0b7e28bce9a481e35cf748664bbb7fe70a963ced2bc43eec46e6425e3e45f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b0b7e28bce9a481e35cf748664bbb7fe70a963ced2bc43eec46e6425e3e45f->enter($__internal_19b0b7e28bce9a481e35cf748664bbb7fe70a963ced2bc43eec46e6425e3e45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_08ec2a0f615937e50dfba9212fd2a1b0f4bd1e45a4bd6a84f95f3c664ce63f9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ec2a0f615937e50dfba9212fd2a1b0f4bd1e45a4bd6a84f95f3c664ce63f9e->enter($__internal_08ec2a0f615937e50dfba9212fd2a1b0f4bd1e45a4bd6a84f95f3c664ce63f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_19b0b7e28bce9a481e35cf748664bbb7fe70a963ced2bc43eec46e6425e3e45f->leave($__internal_19b0b7e28bce9a481e35cf748664bbb7fe70a963ced2bc43eec46e6425e3e45f_prof);

        
        $__internal_08ec2a0f615937e50dfba9212fd2a1b0f4bd1e45a4bd6a84f95f3c664ce63f9e->leave($__internal_08ec2a0f615937e50dfba9212fd2a1b0f4bd1e45a4bd6a84f95f3c664ce63f9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
