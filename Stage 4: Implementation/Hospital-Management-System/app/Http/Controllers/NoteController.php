<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\NoteRepository;
use Illuminate\Http\Request;
use Flash;

class NoteController extends AppBaseController
{
    /** @var NoteRepository $noteRepository*/
    private $noteRepository;

    public function __construct(NoteRepository $noteRepo)
    {
        $this->noteRepository = $noteRepo;
    }

    /**
     * Display a listing of the Note.
     */
    public function index(Request $request)
    {
        $notes = $this->noteRepository->paginate(10);

        return view('notes.index')
            ->with('notes', $notes);
    }

    /**
     * Show the form for creating a new Note.
     */
    public function create()
    {
        return view('notes.create');
    }

    /**
     * Store a newly created Note in storage.
     */
    public function store(CreateNoteRequest $request)
    {
        $input = $request->all();

        $note = $this->noteRepository->create($input);

        Flash::success('Note saved successfully.');

        return redirect(route('notes.index'));
    }

    /**
     * Display the specified Note.
     */
    public function show($id)
    {
        $note = $this->noteRepository->find($id);

        if (empty($note)) {
            Flash::error('Note not found');

            return redirect(route('notes.index'));
        }

        return view('notes.show')->with('note', $note);
    }

    /**
     * Show the form for editing the specified Note.
     */
    public function edit($id)
    {
        $note = $this->noteRepository->find($id);

        if (empty($note)) {
            Flash::error('Note not found');

            return redirect(route('notes.index'));
        }

        return view('notes.edit')->with('note', $note);
    }

    /**
     * Update the specified Note in storage.
     */
    public function update($id, UpdateNoteRequest $request)
    {
        $note = $this->noteRepository->find($id);

        if (empty($note)) {
            Flash::error('Note not found');

            return redirect(route('notes.index'));
        }

        $note = $this->noteRepository->update($request->all(), $id);

        Flash::success('Note updated successfully.');

        return redirect(route('notes.index'));
    }

    /**
     * Remove the specified Note from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $note = $this->noteRepository->find($id);

        if (empty($note)) {
            Flash::error('Note not found');

            return redirect(route('notes.index'));
        }

        $this->noteRepository->delete($id);

        Flash::success('Note deleted successfully.');

        return redirect(route('notes.index'));
    }
}
