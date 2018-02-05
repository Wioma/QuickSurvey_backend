<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_96d76cf67558d2e049828069e92c141614ca172746223284ca8abdbec6cf362b extends Twig_Template
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
        $__internal_a91b5444f1072e39c5e0139e48f2d1d2aed3fc626237612aaf314489e3610be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a91b5444f1072e39c5e0139e48f2d1d2aed3fc626237612aaf314489e3610be7->enter($__internal_a91b5444f1072e39c5e0139e48f2d1d2aed3fc626237612aaf314489e3610be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_99e4eff2ed5187ebb2d3159d8f2d8f8d6b94de00a84c02fc2902c8be9bdaebe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99e4eff2ed5187ebb2d3159d8f2d8f8d6b94de00a84c02fc2902c8be9bdaebe6->enter($__internal_99e4eff2ed5187ebb2d3159d8f2d8f8d6b94de00a84c02fc2902c8be9bdaebe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a91b5444f1072e39c5e0139e48f2d1d2aed3fc626237612aaf314489e3610be7->leave($__internal_a91b5444f1072e39c5e0139e48f2d1d2aed3fc626237612aaf314489e3610be7_prof);

        
        $__internal_99e4eff2ed5187ebb2d3159d8f2d8f8d6b94de00a84c02fc2902c8be9bdaebe6->leave($__internal_99e4eff2ed5187ebb2d3159d8f2d8f8d6b94de00a84c02fc2902c8be9bdaebe6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
