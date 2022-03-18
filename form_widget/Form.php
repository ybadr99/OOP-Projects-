<?php


class Form extends HtmlElement
{
    public string $action;
    public string $method;

    private array $elements = [];

    public function __construct(string $action = '' ,string $method = 'get')
    {
        $this->action = $action;
        $this->method = $method;
    }


    public function addElement(HtmlElement $el)
    {
        $this->elements[] = $el;
    }

    public function render(): string
    {
        $inputs = implode(PHP_EOL, array_map(fn($el) => $el->render(), $this->elements));

        return sprintf('<form action="%s" method="%s">
            %s
        </form>', $this->action, $this->method, $inputs);
    }
}