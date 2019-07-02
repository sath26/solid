<?php
interface LessonRepositoryInterface
{
    /**
     * Gets all lessons.
     *
     * @return array
     */
     public function getAll();
}

class FilesystemLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        // Fetch the lessons from the filesystem
        return $files;
    }
}

class DatabaseLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        return Lesson::all()->toArray();
    }
}