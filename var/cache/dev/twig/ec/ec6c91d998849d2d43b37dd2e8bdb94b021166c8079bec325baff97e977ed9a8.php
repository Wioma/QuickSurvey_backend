<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_81ddcfd25cddd2cce6467e46aa75d7652bc0ff2b41cd2a6b089512a10e529367 extends Twig_Template
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
        $__internal_1c8aff70f44748027bb3fc038938205fcbd4b9297b7c4bee663d6e7bed7598e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c8aff70f44748027bb3fc038938205fcbd4b9297b7c4bee663d6e7bed7598e5->enter($__internal_1c8aff70f44748027bb3fc038938205fcbd4b9297b7c4bee663d6e7bed7598e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d36ca5a0c9166871e74ea35cb1317c776b32a1e0a6736e464aa539aa43208d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d36ca5a0c9166871e74ea35cb1317c776b32a1e0a6736e464aa539aa43208d2f->enter($__internal_d36ca5a0c9166871e74ea35cb1317c776b32a1e0a6736e464aa539aa43208d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1c8aff70f44748027bb3fc038938205fcbd4b9297b7c4bee663d6e7bed7598e5->leave($__internal_1c8aff70f44748027bb3fc038938205fcbd4b9297b7c4bee663d6e7bed7598e5_prof);

        
        $__internal_d36ca5a0c9166871e74ea35cb1317c776b32a1e0a6736e464aa539aa43208d2f->leave($__internal_d36ca5a0c9166871e74ea35cb1317c776b32a1e0a6736e464aa539aa43208d2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
