//
//  score.swift
//  urban explorAR
//
//  Created by Christopher Wainwright on 07/02/2019.
//  Copyright © 2019 Christopher Wainwright. All rights reserved.
//

import Foundation

// structure to read scores from json output
struct score: Decodable {
    let score_id: String
    let nickname: String
    let time: String
    let score: String
    let treasure_hunt_id: String
}
