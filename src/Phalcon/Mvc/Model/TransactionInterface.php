<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Mvc\Model;

use Phalcon\Db\Adapter\AdapterInterface;
use Phalcon\Mvc\ModelInterface;
use Phalcon\Mvc\Model\Transaction\ManagerInterface;

/**
 * Phalcon\Mvc\Model\TransactionInterface
 *
 * Interface for Phalcon\Mvc\Model\Transaction
 */
interface TransactionInterface
{

    /**
     * Starts the transaction
     *
     * @return bool
     */
    public function begin(): bool;

    /**
     * Commits the transaction
     *
     * @return bool
     */
    public function commit(): bool;

    /**
     * Returns connection related to transaction
     *
     * @return AdapterInterface
     */
    public function getConnection(): AdapterInterface;

    /**
     * Returns validations messages from last save try
     *
     * @return array
     */
    public function getMessages(): array;

    /**
     * Checks whether transaction is managed by a transaction manager
     *
     * @return bool
     */
    public function isManaged(): bool;

    /**
     * Checks whether internal connection is under an active transaction
     *
     * @return bool
     */
    public function isValid(): bool;

    /**
     * Rollbacks the transaction
     *
     * @param string $rollbackMessage
     * @param ModelInterface $rollbackRecord
     * @return bool
     */
    public function rollback(string $rollbackMessage = null, ModelInterface $rollbackRecord = null): bool;

    /**
     * Sets if is a reused transaction or new once
     *
     * @param bool $isNew
     * @return void
     */
    public function setIsNewTransaction(bool $isNew);

    /**
     * Sets flag to rollback on abort the HTTP connection
     *
     * @param bool $rollbackOnAbort
     * @return void
     */
    public function setRollbackOnAbort(bool $rollbackOnAbort);

    /**
     * Sets object which generates rollback action
     *
     * @param ModelInterface $record
     * @return void
     */
    public function setRollbackedRecord(ModelInterface $record);

    /**
     * Sets transaction manager related to the transaction
     *
     * @param ManagerInterface $manager
     * @return void
     */
    public function setTransactionManager(ManagerInterface $manager);

    /**
     * Enables throwing exception
     *
     * @param bool $status
     * @return TransactionInterface
     */
    public function throwRollbackException(bool $status): TransactionInterface;
}
