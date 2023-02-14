 $rules = [
            'nama' => 'required|string|max:20',
            'stok' => 'required|integer'
        ];

        $validatedData = $request->validate($rules);

        Barang::where('id', $barangs->id)
            ->update($validatedData);

        return redirect('/dashboard')->with('success','Post good');