<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_926420c518bb98c4bf365268dceb865f9ae7f99b5d3c4341b5019c04a60451ab extends Twig_Template
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
        $__internal_018d031cd9793f2f750d0d3c432fb1bb6311a4b5ab2b512738ba7cc41363e03f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018d031cd9793f2f750d0d3c432fb1bb6311a4b5ab2b512738ba7cc41363e03f->enter($__internal_018d031cd9793f2f750d0d3c432fb1bb6311a4b5ab2b512738ba7cc41363e03f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_cf3dee56b0178951911c8b8a836443d857635114b8d44bd0c20e07e338af3d81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3dee56b0178951911c8b8a836443d857635114b8d44bd0c20e07e338af3d81->enter($__internal_cf3dee56b0178951911c8b8a836443d857635114b8d44bd0c20e07e338af3d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_018d031cd9793f2f750d0d3c432fb1bb6311a4b5ab2b512738ba7cc41363e03f->leave($__internal_018d031cd9793f2f750d0d3c432fb1bb6311a4b5ab2b512738ba7cc41363e03f_prof);

        
        $__internal_cf3dee56b0178951911c8b8a836443d857635114b8d44bd0c20e07e338af3d81->leave($__internal_cf3dee56b0178951911c8b8a836443d857635114b8d44bd0c20e07e338af3d81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
