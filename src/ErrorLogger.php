<?php

namespace SetBased\Abc\ErrorLogger;

/**
 * Interface for logging an error (i.e. an instance of Error or Exception).
 */
interface ErrorLogger
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Logs an error.
   *
   * @param \Throwable $throwable The instance of Exception or Error to be logged.
   *
   * @return void
   */
  public function logError(\Throwable $throwable): void;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
