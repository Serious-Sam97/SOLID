<?php

namespace src\Model;

class Feedback
{
    private int $nota;
    private ?string $depoimento;

    public function __construct(int $nota, ?string $depoimento)
    {
        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatório');
        }
        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }

    /**
     * @return integer
     */
    public function recuperarNota(): int
    {
        return $this->nota;
    }

    /**
     * @return string|null
     */
    public function recuperarDepoimento(): ?string
    {
        return $this->depoimento;
    }
}
