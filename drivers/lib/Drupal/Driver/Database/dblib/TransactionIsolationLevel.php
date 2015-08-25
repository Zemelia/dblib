<?php

/**
 * @file
 * Contains \Drupal\Driver\Database\dblib\TransactionIsolationLevel.
 */

namespace Drupal\Driver\Database\dblib;

/**
 * Available transaction isolation levels.
 */
class TransactionIsolationLevel extends Enum {
  const ReadUncommitted = 'READ UNCOMMITTED';
  const ReadCommitted = 'READ COMMITTED';
  const RepeatableRead = 'REPEATABLE READ';
  const Snapshot = 'SNAPSHOT';
  const Serializable = 'SERIALIZABLE';
  const Chaos = 'CHAOS';
  const Ignore = 'IGNORE';
}
