<?php

namespace App\Core\Actions;

use App\Core\Actions\Traits\HasTransactions;
use App\Core\Contracts\Action;
use App\Exceptions\MethodNotImplementedException;
use Throwable;

abstract class CoreAction implements Action
{
    use HasTransactions;

    protected bool $useTransactions = true;

    public function execute(...$params)
    {
        try {
            $this->useTransactions && $this->beginTransaction();

            if (!method_exists($this, 'handle')) {
                throw new MethodNotImplementedException('Method "handle" does not exist in: ' . get_class($this));
            }

            $result = $this->handle(...$params);
        } catch (Throwable $e) {
            $this->processFailure($e);
        }

        $this->beforeCommit();

        if ($this->useTransactions) {
            $this->commit();
        }

        $this->afterCommit(...$params);

        return $result;
    }

    private function processFailure(Throwable $e)
    {
        $this->beforeRollBack();
        $this->useTransactions && $this->rollBack();

        throw $e;
    }
}
