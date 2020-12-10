
--
-- Indexes for dumped tables
--

--
-- Indexes for table `baby`
--
ALTER TABLE `baby`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `baby_beany`
--
ALTER TABLE `baby_beany`
  ADD PRIMARY KEY (`bb_id`);

--
-- Indexes for table `child_thoub`
--
ALTER TABLE `child_thoub`
  ADD UNIQUE KEY `mth_id` (`mth_id`);

--
-- Indexes for table `ch_boy`
--
ALTER TABLE `ch_boy`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `ch_girl`
--
ALTER TABLE `ch_girl`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `ch_shoes`
--
ALTER TABLE `ch_shoes`
  ADD PRIMARY KEY (`chsh_id`);

--
-- Indexes for table `men_belt`
--
ALTER TABLE `men_belt`
  ADD PRIMARY KEY (`mb_id`);

--
-- Indexes for table `men_hat`
--
ALTER TABLE `men_hat`
  ADD PRIMARY KEY (`mh_id`);

--
-- Indexes for table `men_pants`
--
ALTER TABLE `men_pants`
  ADD PRIMARY KEY (`mp_id`);

--
-- Indexes for table `men_shemagh`
--
ALTER TABLE `men_shemagh`
  ADD PRIMARY KEY (`mshm_id`);

--
-- Indexes for table `men_shirt`
--
ALTER TABLE `men_shirt`
  ADD PRIMARY KEY (`mshr_id`);

--
-- Indexes for table `men_shoes`
--
ALTER TABLE `men_shoes`
  ADD PRIMARY KEY (`msh_id`);

--
-- Indexes for table `men_thoub`
--
ALTER TABLE `men_thoub`
  ADD UNIQUE KEY `mth_id` (`mth_id`);

--
-- Indexes for table `men_top`
--
ALTER TABLE `men_top`
  ADD PRIMARY KEY (`mt_id`);

--
-- Indexes for table `men_underwear`
--
ALTER TABLE `men_underwear`
  ADD PRIMARY KEY (`mun_id`);

--
-- Indexes for table `toddler`
--
ALTER TABLE `toddler`
  ADD UNIQUE KEY `t_id` (`t_id`);

--
-- Indexes for table `women_abaya`
--
ALTER TABLE `women_abaya`
  ADD PRIMARY KEY (`wa_id`);

--
-- Indexes for table `women_belt`
--
ALTER TABLE `women_belt`
  ADD PRIMARY KEY (`wb_id`);

--
-- Indexes for table `women_bra`
--
ALTER TABLE `women_bra`
  ADD PRIMARY KEY (`wbra_id`);

--
-- Indexes for table `women_maternity`
--
ALTER TABLE `women_maternity`
  ADD PRIMARY KEY (`wm_id`);

--
-- Indexes for table `women_ring`
--
ALTER TABLE `women_ring`
  ADD PRIMARY KEY (`wr_id`);

--
-- Indexes for table `women_shoes`
--
ALTER TABLE `women_shoes`
  ADD PRIMARY KEY (`wsh_id`);

--
-- Indexes for table `women_size`
--
ALTER TABLE `women_size`
  ADD PRIMARY KEY (`w_id`);

--
-- Indexes for table `women_tight`
--
ALTER TABLE `women_tight`
  ADD PRIMARY KEY (`wt_id`);

--
-- Indexes for table `women_underwear`
--
ALTER TABLE `women_underwear`
  ADD PRIMARY KEY (`wun_id`);

--
-- Indexes for table `youth_thoub`
--
ALTER TABLE `youth_thoub`
  ADD UNIQUE KEY `mth_id` (`mth_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baby`
--
ALTER TABLE `baby`
  MODIFY `b_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `baby_beany`
--
ALTER TABLE `baby_beany`
  MODIFY `bb_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `child_thoub`
--
ALTER TABLE `child_thoub`
  MODIFY `mth_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `ch_boy`
--
ALTER TABLE `ch_boy`
  MODIFY `b_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ch_girl`
--
ALTER TABLE `ch_girl`
  MODIFY `g_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ch_shoes`
--
ALTER TABLE `ch_shoes`
  MODIFY `chsh_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `men_belt`
--
ALTER TABLE `men_belt`
  MODIFY `mb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `men_hat`
--
ALTER TABLE `men_hat`
  MODIFY `mh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `men_pants`
--
ALTER TABLE `men_pants`
  MODIFY `mp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `men_shemagh`
--
ALTER TABLE `men_shemagh`
  MODIFY `mshm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `men_shirt`
--
ALTER TABLE `men_shirt`
  MODIFY `mshr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `men_shoes`
--
ALTER TABLE `men_shoes`
  MODIFY `msh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `men_thoub`
--
ALTER TABLE `men_thoub`
  MODIFY `mth_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `men_top`
--
ALTER TABLE `men_top`
  MODIFY `mt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `men_underwear`
--
ALTER TABLE `men_underwear`
  MODIFY `mun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `toddler`
--
ALTER TABLE `toddler`
  MODIFY `t_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `women_abaya`
--
ALTER TABLE `women_abaya`
  MODIFY `wa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `women_belt`
--
ALTER TABLE `women_belt`
  MODIFY `wb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `women_bra`
--
ALTER TABLE `women_bra`
  MODIFY `wbra_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `women_maternity`
--
ALTER TABLE `women_maternity`
  MODIFY `wm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `women_ring`
--
ALTER TABLE `women_ring`
  MODIFY `wr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `women_shoes`
--
ALTER TABLE `women_shoes`
  MODIFY `wsh_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `women_size`
--
ALTER TABLE `women_size`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `women_tight`
--
ALTER TABLE `women_tight`
  MODIFY `wt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `women_underwear`
--
ALTER TABLE `women_underwear`
  MODIFY `wun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `youth_thoub`
--
ALTER TABLE `youth_thoub`
  MODIFY `mth_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
