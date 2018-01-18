<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8fcb6db4fd6a4759b873fb78826df29342b9ba70a190b696f354a8bef84e537d extends Twig_Template
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
        $__internal_b01265477d8d476451aaa319a2942d77d5d06bf59e5fe39218881312bcddd33a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01265477d8d476451aaa319a2942d77d5d06bf59e5fe39218881312bcddd33a->enter($__internal_b01265477d8d476451aaa319a2942d77d5d06bf59e5fe39218881312bcddd33a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7d535cd3f2d89d5660bc8caef811a19aab1cb49c5bd2ea08886041a577f1f56f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d535cd3f2d89d5660bc8caef811a19aab1cb49c5bd2ea08886041a577f1f56f->enter($__internal_7d535cd3f2d89d5660bc8caef811a19aab1cb49c5bd2ea08886041a577f1f56f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b01265477d8d476451aaa319a2942d77d5d06bf59e5fe39218881312bcddd33a->leave($__internal_b01265477d8d476451aaa319a2942d77d5d06bf59e5fe39218881312bcddd33a_prof);

        
        $__internal_7d535cd3f2d89d5660bc8caef811a19aab1cb49c5bd2ea08886041a577f1f56f->leave($__internal_7d535cd3f2d89d5660bc8caef811a19aab1cb49c5bd2ea08886041a577f1f56f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\QuickSurvey_backend\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
