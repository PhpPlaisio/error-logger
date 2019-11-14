<?php

namespace Plaisio\ErrorLogger;

/**
 * Interface for logging an error (i.e. a Throwable object).
 */
interface ErrorLogger
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Logs an error.
   *
   * @param \Throwable $throwable The error.
   *
   * @return void
   */
  public function logError(\Throwable $throwable): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
